@if(!empty(request()->get('menu')))
<div id="accordion-left">
    @php
        // $blogs = \App\Blog::get(['id', 'title','slug'])->map(function($blog){
        //     return [
        //         'url' => $blog->getLink(),
        //         'icon' => '',
        //         'label' => $blog->title,
        //     ];
        // });
        $pages = [
            [
                'url' => '/page1',
                'icon' => '',
                'label' => 'Page 1',
            ],
            [
                'url' => '/page2',
                'icon' => '',
                'label' => 'Page 2',
            ],
            [
                'url' => '/page3',
                'icon' => '',
                'label' => 'Page 2',
            ],
            [
                'url' => '/page4',
                'icon' => '',
                'label' => 'Page 4',
            ],
            [
                'url' => '/page5',
                'icon' => '',
                'label' => 'Page 5',
            ]
        ];
    @endphp
    @include('nguyendachuy-menu::accordions.default', [
        'name' => 'Pages', 
        'urls' => $pages, 
        'show' => true
    ])
    @php
    $categories = [
            [
                'url' => '/category1',
                'icon' => '',
                'label' => 'Category 1',
            ],
            [
                'url' => '/category2',
                'icon' => '',
                'label' => 'Category 2',
            ],
            [
                'url' => '/category3',
                'icon' => '',
                'label' => 'Category 2',
            ],
            [
                'url' => '/category4',
                'icon' => '',
                'label' => 'Category 4',
            ],
            [
                'url' => '/category5',
                'icon' => '',
                'label' => 'Category 5',
            ]
        ];
    @endphp
    @include('nguyendachuy-menu::accordions.default', ['name' => 'Categories', 'urls' => $categories])

    @include('nguyendachuy-menu::accordions.add-link', ['name' => __('Add Link')])
</div>
@endif