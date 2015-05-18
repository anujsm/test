(function($){
 
    if ( 'chart_most_popular' == data.data_type ) {
 
        var post_titles = [],
        post_comment_count = [];
 
        $( data.post_data ).each(function() {
 
            post_titles.push( this.post_title );
            post_comment_count.push( parseInt( this.comment_count ) );
 
        });
 
        $('#chart-stats').highcharts({
            chart: {
                type: data.chart_type
            },
            title: {
                text: 'Most Popular Posts (by number of comments)'
            },
            xAxis: {
                categories: post_titles
            },
            yAxis: {
                title: {
                    text: 'Number of Comments'
                }
            },
            series: [
                {
                    name: 'Comments Count',
                    data: post_comment_count
                }
            ]
        });
    }
}(jQuery));
