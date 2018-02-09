$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2017 Q1',
            Visualização: 2666,
            contato: null,
            negociação: 2647
        }, {
            period: '2017 Q2',
            Visualização: 2778,
            contato: 2294,
            negociação: 2441
        }, {
            period: '2017 Q3',
            Visualização: 4912,
            contato: 1969,
            negociação: 2501
        }, {
            period: '2017 Q4',
            Visualização: 3767,
            contato: 3597,
            negociação: 5689
        }, {
            period: '2017 Q1',
            Visualização: 6810,
            contato: 1914,
            negociação: 2293
        }, {
            period: '2017 Q2',
            Visualização: 5670,
            contato: 4293,
            negociação: 1881
        }, {
            period: '2017 Q3',
            Visualização: 4820,
            contato: 3795,
            negociação: 1588
        }, {
            period: '2017 Q4',
            Visualização: 15073,
            contato: 5967,
            negociação: 5175
        }, {
            period: '2018 Q1',
            Visualização: 10687,
            contato: 4460,
            negociação: 2028
        }, {
            period: '2018 Q2',
            Visualização: 8432,
            contato: 5713,
            negociação: 1791
        }],
        xkey: 'period',
        ykeys: ['Visualização', 'contato', 'negociação'],
        labels: ['Visualização', 'contato', 'negociação'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2017',
            a: 50,
            b: 40
        }, {
            y: '2017',
            a: 75,
            b: 65
        }, {
            y: '2018',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
