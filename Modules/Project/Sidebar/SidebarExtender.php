<?php

namespace Modules\Project\Sidebar;

use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
    public function extend(Menu $menu)
    {
        $menu->group(trans('admin::sidebar.content'), function (Group $group) {
            $group->item(trans('project::projects.projects'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(6);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('project::projects.projects'), function (Item $item) {
                    $item->weight(6);
                    $item->route('admin.projects.index');
                    $item->authorize(
                        $this->auth->hasAccess('admin.projects.index')
                    );
                });

                $item->item(trans('project::category_projects.category_projects'), function (Item $item) {
                    $item->weight(6);
                    $item->route('admin.category_projects.index');
                    $item->authorize(
                        $this->auth->hasAccess('admin.category_projects.index')
                    );
                });
                // append
            });
        });
    }
}
