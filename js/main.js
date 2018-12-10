/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.menu li:has(ul)').click(function(e){
        e.preventDefault();
        
        
        
        
        if($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else{
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
            
        }
    });
    
    $('.btn-menu').click(function(a){
        a.preventDefault();
    $('.contenedor-menu .menu').slideToggle();    
    });
    
    $(window).resize(function(){
        if($(document).width() > 450){
            $('.contenedor-menu .menu').css({'display' : 'block'});
        }
        if($(document).width() < 450){
            $('.contenedor-menu .menu').css({'display' : 'none'});
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            
        }
    });
    
    $('.menu li ul li a').click(function(){
        window.location.href= $(this).attr("href");
    });
    
});








