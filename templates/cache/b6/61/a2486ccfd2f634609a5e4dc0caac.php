<?php

/* layout.html */
class __TwigTemplate_b661a2486ccfd2f634609a5e4dc0caac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/bootstrap-modal.css\" rel=\"stylesheet\">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]> HTML5Shiv
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
        <title>Slim Task Project</title>
    </head>
    <body>
        <!-- start navigation-->
    \t<div class=\"navbar\">
          <div class=\"navbar-inner\">
            <a class=\"brand\" href=\"#\">Slim Task Project</a>
            <ul class=\"nav\">
              <li><a href=\"/index.php\">Home</a></li>
              <li><a href=\"#\">Task List</a></li>
              <li><a href=\"#\">Report</a></li>
            </ul>
          </div>
        </div>
        <!-- end navigation-->
        

        <!-- start container-->
    \t<div class=\"container\">
    \t\t\t";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        echo "\t\t
    \t</div>
    

    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/bootstrap-modal.js\"></script>
    <script src=\"assets/js/bootstrap-modalmanager.js\"></script>
    <script>
    /*menu handler*/
     \$(document).ready(function () {
        var url = window.location;
    // Will only work if string in href matches with location
        \$('ul.nav a[href=\"' + url + '\"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
        \$('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');

        var \$modal = \$('#ajax-modal');
 
        \$('#btn_new').on('click', function(){
            // create the backdrop and wait for next modal to be triggered
            \$('body').modalmanager('loading');
             
            setTimeout(function(){
                 url = encodeURI(window.location+\"new\");
                \$modal.load(url, '', function(){
                    \$modal.modal();
                });
            }, 1000);
        });

        
        \$('body').delegate(\"a.link-edit\",\"click\",function(){
            url = encodeURI(window.location+\$(this).attr(\"id\")+\"/edit/\");
            \$('body').modalmanager('loading');
            setTimeout(function(){
               \$modal.load(url, '', function(){
                     \$modal.modal();
                 });
             }, 1000);
           return false;
           
        });

         \$('body').delegate(\"a.link-delete\",\"click\",function(){
           var href = \$(this).attr('href');
           var id = \$(this).attr('id');
            if (!\$('#dataConfirmModal').length) {
                \$('body').append('<div id=\"dataConfirmModal\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button><h3 id=\"dataConfirmLabel\">Please Confirm</h3></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button><a class=\"btn btn-primary\" id=\"dataConfirmOK\">OK</a></div></div>');
            } 
        \$('#dataConfirmModal').find('.modal-body').text(\$(this).attr('data-confirm'));
        \$('#dataConfirmModal').modal({show:true});

        \$('#dataConfirmOK').click(function(){
            \$.ajax({
            type: 'GET',
            url: href,
                success: function(data) {
                    trId = \"tr#\"+id;
                    \$('table '+trId).hide('slow');
                    \$('#dataConfirmModal').modal('hide');    
                }
            })
            
        });
        
        
        
        return false;
        });
             
    });
    </script>
    </body>
</html>";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  86 => 21,  82 => 19,  71 => 16,  65 => 15,  57 => 36,  53 => 13,  49 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 2,);
    }
}
