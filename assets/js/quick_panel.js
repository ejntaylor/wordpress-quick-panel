$j=jQuery.noConflict();

$j(document).ready(function() {

		console.log('quick_panel');
		$j(".quick-panel-chosen-select").chosen({no_results_text: "Oops, nothing found!", width: '100%'}); 






    
    var letter = {
    z: 90

};

var visible = false;
    $j("body").keydown(function(event) {

            // toggles element the first time
        if(!visible && event.ctrlKey && event.which === letter.z) {
            visible = true;
            $j("#quick_panel_outer").fadeIn("fast");
			$j('.quick-panel-chosen-select').trigger('chosen:activate');
            console.log('1');
        } else if(visible && event.ctrlKey && event.which === letter.z) {
            visible = false;
            $j("#quick_panel_outer").fadeOut("fast");
            console.log('2');
        }


    });

});