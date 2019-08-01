<?php
    namespace  View;

    class View{
        function generate($contentView, $templateView, $data = null){
            
            include 'application/views/'.$templateView;
        }
    }