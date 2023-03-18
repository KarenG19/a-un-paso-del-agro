jQuery(function($){

    $.supersized({

        slide_interval     : 3000,    
        transition         : 1,    
        transition_speed   : 800,    
        performance        : 1,   

        min_width          : 0,    
        min_height         : 0,    
        vertical_center    : 1,    
        horizontal_center  : 1,    
        fit_always         : 0,    
        fit_portrait       : 1,    
        fit_landscape      : 0,    

        slide_links        : '',    
        slides             : [   
                                 {image : 'img/inicio1.jpg'},
                                 {image : 'img/inicio2.jpg'},
                                 {image : 'img/inicio3.jpg'},
                                 {image : 'img/inicio4.jpg'},
                                 {image : 'img/inicio5.jpg'}
                             ]

    });

});
