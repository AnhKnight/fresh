<?php

namespace Modules\Project\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs;
use Modules\Category\Entities\Category;
use Modules\Project\Entities\CategoryProject;

class ProjectTabs extends Tabs
{
    public function make()
    {
        $this->group('attribute_set_information', trans('attribute::admin.tabs.group.attribute_information'))
            ->active()
            ->add($this->general())
            ->add($this->images())
            ->add($this->seo());
    }

    private function general()
    {
        return tap(new Tab('general', trans('attribute::admin.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['attribute_set_id', 'name']);
            $tab->view('project::admin.projects.tabs.general', [
                'categories' => CategoryProject::treeList(),
                'category_products' => Category::treeList(),
            ]);
        });
    }

    private function images()
    {
        if (! auth()->user()->hasAccess('admin.media.index')) {
            return;
        }

        return tap(new Tab('images', trans('product::products.tabs.images')), function (Tab $tab) {
            $tab->weight(20);
            $tab->view('project::admin.projects.tabs.images');
        });
    }

    private function seo()
    {
        return tap(new Tab('seo', trans('product::products.tabs.seo')), function (Tab $tab) {
            $tab->weight(25);
            $tab->fields('slug');
            $tab->view('project::admin.projects.tabs.seo');
        });
    }
}
