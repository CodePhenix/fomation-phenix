jQuery(document).ready(function(){var $j=jQuery;$j('.penci-review-process').each(function(){var $this=$j(this),$bar=$this.children(),$bar_w=$bar.data('width')*10;$this.one('inview',function(event,isInView,visiblePartX,visiblePartY){$bar.animate({width:$bar_w+'%'},1000)})});$j('.penci-piechart').each(function(){var $this=$j(this);$this.one('inview',function(event,isInView,visiblePartX,visiblePartY){var chart_args={barColor:$this.data('color'),trackColor:$this.data('trackcolor'),scaleColor:!1,lineWidth:$this.data('thickness'),size:$this.data('size'),animate:1000};$this.easyPieChart(chart_args)})})})