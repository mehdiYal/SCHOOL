<?php

/* examen/show.html.twig */
class __TwigTemplate_a1b96c2faa383abda9cdade76ba0a3c360dfe9e8be438944a58b73d99d1c42ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "examen/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f171d241dcfe06091b9a409ecbbb714904346d7a7b71493cd324dc891a2e607c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f171d241dcfe06091b9a409ecbbb714904346d7a7b71493cd324dc891a2e607c->enter($__internal_f171d241dcfe06091b9a409ecbbb714904346d7a7b71493cd324dc891a2e607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/show.html.twig"));

        $__internal_608a929f02fc0c0df4efc710715bb0e1fccf31b2d397061dca533efe0c17573f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608a929f02fc0c0df4efc710715bb0e1fccf31b2d397061dca533efe0c17573f->enter($__internal_608a929f02fc0c0df4efc710715bb0e1fccf31b2d397061dca533efe0c17573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f171d241dcfe06091b9a409ecbbb714904346d7a7b71493cd324dc891a2e607c->leave($__internal_f171d241dcfe06091b9a409ecbbb714904346d7a7b71493cd324dc891a2e607c_prof);

        
        $__internal_608a929f02fc0c0df4efc710715bb0e1fccf31b2d397061dca533efe0c17573f->leave($__internal_608a929f02fc0c0df4efc710715bb0e1fccf31b2d397061dca533efe0c17573f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dead105de1329ca93189386d24f2bbca26030a8b97d76169b23aef17622f7509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dead105de1329ca93189386d24f2bbca26030a8b97d76169b23aef17622f7509->enter($__internal_dead105de1329ca93189386d24f2bbca26030a8b97d76169b23aef17622f7509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ddb3701a649ee846a71e5d1ed8cbf437bad547f23b0b47633e7086228ed790f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddb3701a649ee846a71e5d1ed8cbf437bad547f23b0b47633e7086228ed790f->enter($__internal_0ddb3701a649ee846a71e5d1ed8cbf437bad547f23b0b47633e7086228ed790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
            <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   
<!-- Button trigger modal -->
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Launch demo modal
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
         
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
         </div>
    </div>
  </div>
</div>

";
        
        $__internal_0ddb3701a649ee846a71e5d1ed8cbf437bad547f23b0b47633e7086228ed790f->leave($__internal_0ddb3701a649ee846a71e5d1ed8cbf437bad547f23b0b47633e7086228ed790f_prof);

        
        $__internal_dead105de1329ca93189386d24f2bbca26030a8b97d76169b23aef17622f7509->leave($__internal_dead105de1329ca93189386d24f2bbca26030a8b97d76169b23aef17622f7509_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7019c16a1059d511846c45afa410e2d1831e0a271cd47e7d4a967e9669370962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7019c16a1059d511846c45afa410e2d1831e0a271cd47e7d4a967e9669370962->enter($__internal_7019c16a1059d511846c45afa410e2d1831e0a271cd47e7d4a967e9669370962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11716388a4ad58101e1cfcc7e97b171f988740b24d7bbbed3680304f4e621392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11716388a4ad58101e1cfcc7e97b171f988740b24d7bbbed3680304f4e621392->enter($__internal_11716388a4ad58101e1cfcc7e97b171f988740b24d7bbbed3680304f4e621392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    
    

  <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/lang/fr.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
      \$( document ).ready(function() {
     
      

    var calendar = \$('#calendar').fullCalendar({
      
        editable: false,
        
        minTime: \"8:00\",

                maxTime: \"18:00\",

                firstDay: 0,

                hiddenDays: [ 5, 6 ],

        lang: 'fr',

        defaultView: 'agendaWeek',
          
          header: {
          left: 'prev,next today',
            center: 'title',
            right: 'agendaWeek,agendaDay'
          },


         events: \"events.php\",
         
         eventRender: function(event, element, view) {

            if (event.allDay === 'true') {

             event.allDay = true;

            } else {

             event.allDay = false;

            }

         },

           //selectable: true,

           selectHelper: true,

           /*select: function(start, end, allDay) {

             var title = prompt('Event Title:');


             if (title) {

          
               \$.ajax({

                 url: 'add_events.php',

                 data: 'title='+ title+'&start='+ start +'&end='+ end,

                 type: \"POST\",

                 success: function(json) {

                 alert('Added Successfully');

                 }

               }); 

               calendar.fullCalendar('renderEvent',{

                   title: title,

                   start: start,

                   end: end,

                  },true
              );

             }

              calendar.fullCalendar('unselect');

           },*/

           /*
           eventDrop: function(event, delta) {

             var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

             var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

             \$.ajax({

               url: 'update_events.php',

               data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

               type: \"POST\",

               success: function(json) {

                alert(\"Updated Successfully\");

               }

             });

           },

           eventClick: function(event) {

            var decision = confirm(\"Do you really want to do that?\"); 

            if (decision) {

              \$.ajax({

                type: \"POST\",

                url: \"delete_event.php\",

                data: \"&id=\" + event.id,

                 success: function(json) {

                   \$('#calendar').fullCalendar('removeEvents', event.id);

                    alert(\"Updated Successfully\");}

              });

            }

            },

           eventResize: function(event) {

             var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

             var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

             \$.ajax({

              url: 'update_events.php',

              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

              type: \"POST\",

              success: function(json) {

               alert(\"Updated Successfully\");

              }

             });

          } */
    });
        
      });

    </script>
";
        
        $__internal_11716388a4ad58101e1cfcc7e97b171f988740b24d7bbbed3680304f4e621392->leave($__internal_11716388a4ad58101e1cfcc7e97b171f988740b24d7bbbed3680304f4e621392_prof);

        
        $__internal_7019c16a1059d511846c45afa410e2d1831e0a271cd47e7d4a967e9669370962->leave($__internal_7019c16a1059d511846c45afa410e2d1831e0a271cd47e7d4a967e9669370962_prof);

    }

    public function getTemplateName()
    {
        return "examen/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  110 => 46,  105 => 43,  96 => 42,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}

  <div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
            <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   
<!-- Button trigger modal -->
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Launch demo modal
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
         
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
         </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}
    
    

  <script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/lang/fr.js')}}\"></script>

    <script type=\"text/javascript\">
      \$( document ).ready(function() {
     
      

    var calendar = \$('#calendar').fullCalendar({
      
        editable: false,
        
        minTime: \"8:00\",

                maxTime: \"18:00\",

                firstDay: 0,

                hiddenDays: [ 5, 6 ],

        lang: 'fr',

        defaultView: 'agendaWeek',
          
          header: {
          left: 'prev,next today',
            center: 'title',
            right: 'agendaWeek,agendaDay'
          },


         events: \"events.php\",
         
         eventRender: function(event, element, view) {

            if (event.allDay === 'true') {

             event.allDay = true;

            } else {

             event.allDay = false;

            }

         },

           //selectable: true,

           selectHelper: true,

           /*select: function(start, end, allDay) {

             var title = prompt('Event Title:');


             if (title) {

          
               \$.ajax({

                 url: 'add_events.php',

                 data: 'title='+ title+'&start='+ start +'&end='+ end,

                 type: \"POST\",

                 success: function(json) {

                 alert('Added Successfully');

                 }

               }); 

               calendar.fullCalendar('renderEvent',{

                   title: title,

                   start: start,

                   end: end,

                  },true
              );

             }

              calendar.fullCalendar('unselect');

           },*/

           /*
           eventDrop: function(event, delta) {

             var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

             var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

             \$.ajax({

               url: 'update_events.php',

               data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

               type: \"POST\",

               success: function(json) {

                alert(\"Updated Successfully\");

               }

             });

           },

           eventClick: function(event) {

            var decision = confirm(\"Do you really want to do that?\"); 

            if (decision) {

              \$.ajax({

                type: \"POST\",

                url: \"delete_event.php\",

                data: \"&id=\" + event.id,

                 success: function(json) {

                   \$('#calendar').fullCalendar('removeEvents', event.id);

                    alert(\"Updated Successfully\");}

              });

            }

            },

           eventResize: function(event) {

             var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

             var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

             \$.ajax({

              url: 'update_events.php',

              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

              type: \"POST\",

              success: function(json) {

               alert(\"Updated Successfully\");

              }

             });

          } */
    });
        
      });

    </script>
{% endblock %}", "examen/show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\examen\\show.html.twig");
    }
}
