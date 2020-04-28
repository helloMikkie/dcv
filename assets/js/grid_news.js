var iso = new Isotope( '.grid-news', {
        itemSelector: '.news',
        percentPosition: true,
        layoutMode: 'packery',
        transitionDuration: '0.2s',

        packery: {
            columnWidth: '.grid-sizer',
            gutter: '.gutter-sizer',
        }
    })
