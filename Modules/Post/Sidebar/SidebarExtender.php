<?php

namespace Modules\Post\Sidebar;

use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
    public function extend(Menu $menu)
    {
        $menu->group(trans('admin::sidebar.content'), function (Group $group) {
            $group->item(trans('post::posts.posts'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(5);
                $item->authorize(
                     /* append */
                );

                $item->item(trans('post::posts.posts'), function (Item $item) {
                    $item->weight(5);
                    $item->route('admin.posts.index');
                    $item->authorize(
                        $this->auth->hasAccess('admin.posts.index')
                    );
                });

                $item->item(trans('post::category_posts.category_posts'), function (Item $item) {
                    $item->weight(5);
                    $item->route('admin.category_posts.index');
                    $item->authorize(
                        $this->auth->hasAccess('admin.category_posts.index')
                    );
                });

// append


            });
        });
    }
}
