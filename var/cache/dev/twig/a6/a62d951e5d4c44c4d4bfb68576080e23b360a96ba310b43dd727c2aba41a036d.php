<?php

/* examen/add.html.twig */
class __TwigTemplate_ac24e355c1be7dfcf2174c5c8e3beaa909c46abcd4a4609409402e72a575ef81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "examen/add.html.twig", 1);
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
        $__internal_f092bf07f19c255de8a206cf37b13a431303afa12431d2557f2e541ed7be0a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f092bf07f19c255de8a206cf37b13a431303afa12431d2557f2e541ed7be0a3a->enter($__internal_f092bf07f19c255de8a206cf37b13a431303afa12431d2557f2e541ed7be0a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/add.html.twig"));

        $__internal_bda2923699bd3b13def30c910b2496b4576fe73736227bb558fde23060b02418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda2923699bd3b13def30c910b2496b4576fe73736227bb558fde23060b02418->enter($__internal_bda2923699bd3b13def30c910b2496b4576fe73736227bb558fde23060b02418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f092bf07f19c255de8a206cf37b13a431303afa12431d2557f2e541ed7be0a3a->leave($__internal_f092bf07f19c255de8a206cf37b13a431303afa12431d2557f2e541ed7be0a3a_prof);

        
        $__internal_bda2923699bd3b13def30c910b2496b4576fe73736227bb558fde23060b02418->leave($__internal_bda2923699bd3b13def30c910b2496b4576fe73736227bb558fde23060b02418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd2b11a720dd63b6fb44680920140aefaab2f79940511536d660b25fc27056a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd2b11a720dd63b6fb44680920140aefaab2f79940511536d660b25fc27056a->enter($__internal_cdd2b11a720dd63b6fb44680920140aefaab2f79940511536d660b25fc27056a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f8b017b55d3c486729be28ce3e0dab42f3c94b9d37f9958b3fbbdb178cfc8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f8b017b55d3c486729be28ce3e0dab42f3c94b9d37f9958b3fbbdb178cfc8f->enter($__internal_93f8b017b55d3c486729be28ce3e0dab42f3c94b9d37f9958b3fbbdb178cfc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <script type=\"text/javascript\">
      datedeb = [];
      datefin = [];
      titletab = [];
      j=0;
  </script>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["examen"]) {
            // line 12
            echo "        <script type=\"text/javascript\">
                dateD=new Date(\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "date", array()), "date", array()), "html", null, true);
            echo "\");
                dateD.setHours(new Date(\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "heureDeb", array()), "date", array()), "html", null, true);
            echo "\").getHours());
                dateD.setMinutes(new Date(\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "heureDeb", array()), "date", array()), "html", null, true);
            echo "\").getMinutes());
                datedeb[j]=dateD;
                titletab[j]= \"";
            // line 17
            echo twig_escape_filter($this->env, (((((($this->getAttribute($context["examen"], "type", array()) . " ") . $this->getAttribute($this->getAttribute($context["examen"], "annee", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["examen"], "matiere", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["examen"], "classe", array()), "nom", array())), "html", null, true);
            echo "\";
                dateF=new Date(\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "date", array()), "date", array()), "html", null, true);
            echo "\")
                dateF.setHours(new Date(\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "heureFin", array()), "date", array()), "html", null, true);
            echo "\").getHours());
                dateF.setMinutes(new Date(\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "heureFin", array()), "date", array()), "html", null, true);
            echo "\").getMinutes());
                datefin[j]=dateF;
                j++;
        </script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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

    <!-- Modal -->
    <div class=\"modal fade\" id=\"addEventModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"col-md-12\"> 
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    <div class=\"form-group\">
                      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'widget', array("id" => "selectMatiere", "label_attr" => array("class" => "form-control select")));
        echo "
                          </div>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "matiere", array()), 'errors');
        echo "
                      </div>
                    </div>

                    <div class=\"form-group\">
                      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'widget', array("id" => "selectClasse", "label_attr" => array("class" => "form-control select")));
        echo "
                          </div>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", array()), 'errors');
        echo "
                      </div>
                    </div>
                    <div class=\"form-group\">
                      ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("label_attr" => array("class" => "form-control select")));
        echo "
                        </div>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                      </div>
                    </div>
                    <input hidden=\"hidden\" name=\"date\" class=\"date\" />
                    <input hidden=\"hidden\" name=\"heureDeb\" class=\"heureDeb\" />
                    <input hidden=\"hidden\" name=\"heureFin\" class=\"heureFin\" />
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.close"), "html", null, true);
        echo "</button>
            <input type=\"submit\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\" />
            ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
         </div>
        </div>
      </div>
    </div>
<style type=\"text/css\">
.hidden-row{
  display: none;
}
</style>
";
        
        $__internal_93f8b017b55d3c486729be28ce3e0dab42f3c94b9d37f9958b3fbbdb178cfc8f->leave($__internal_93f8b017b55d3c486729be28ce3e0dab42f3c94b9d37f9958b3fbbdb178cfc8f_prof);

        
        $__internal_cdd2b11a720dd63b6fb44680920140aefaab2f79940511536d660b25fc27056a->leave($__internal_cdd2b11a720dd63b6fb44680920140aefaab2f79940511536d660b25fc27056a_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b230b91c2831a19b6121373164c3a9089da734a4172f5fcd43bb551122976710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b230b91c2831a19b6121373164c3a9089da734a4172f5fcd43bb551122976710->enter($__internal_b230b91c2831a19b6121373164c3a9089da734a4172f5fcd43bb551122976710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f9b3ecaaf53a5f693be23dce4942d0508a5821eefa1c2f9c49cd8d7d03405c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b3ecaaf53a5f693be23dce4942d0508a5821eefa1c2f9c49cd8d7d03405c5d->enter($__internal_f9b3ecaaf53a5f693be23dce4942d0508a5821eefa1c2f9c49cd8d7d03405c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    
    

  <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/lang/fr.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
      \$( document ).ready(function() {
        
        \$('#selectMatiere').selectpicker({
          style: 'btn-default',
            size: 4
        });

        \$('#selectClasse').selectpicker({
          style: 'btn-default',
            size: 4
        });
      

        var calendar = \$('#calendar').fullCalendar({
      
            editable: false,
        
            minTime: \"8:00\",

            maxTime: \"18:00\",

            firstDay: 0,

            timezone : 'local',

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

             selectable: true,

             selectHelper: true,

             select: function(start, end, allDay) {

             \$('#addEventModal').modal('show');
            
             startDate=new Date(start);
             endDate=new Date(end);
             dateStart=startDate.getFullYear()+\"/\"+(startDate.getMonth()+1)+\"/\"+startDate.getDate();
            \$('.date').attr('value',startDate);
            \$('.heureFin').attr('value',endDate);
            \$('.heureDeb').attr('value',startDate);

            /* if (title) {

          
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

             }*/

              calendar.fullCalendar('unselect');

           },

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
        length=j;
        for(var i=0;i<length;i++){
          calendar.fullCalendar('renderEvent',{
            title: titletab[i],
            start: datedeb[i],
            end: datefin[i],
            },true
          );
      };

    });

    </script>
";
        
        $__internal_f9b3ecaaf53a5f693be23dce4942d0508a5821eefa1c2f9c49cd8d7d03405c5d->leave($__internal_f9b3ecaaf53a5f693be23dce4942d0508a5821eefa1c2f9c49cd8d7d03405c5d_prof);

        
        $__internal_b230b91c2831a19b6121373164c3a9089da734a4172f5fcd43bb551122976710->leave($__internal_b230b91c2831a19b6121373164c3a9089da734a4172f5fcd43bb551122976710_prof);

    }

    public function getTemplateName()
    {
        return "examen/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 103,  236 => 102,  231 => 99,  222 => 98,  201 => 86,  197 => 85,  193 => 84,  181 => 75,  176 => 73,  170 => 70,  163 => 66,  158 => 64,  152 => 61,  144 => 56,  139 => 54,  133 => 51,  128 => 49,  102 => 25,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

  <script type=\"text/javascript\">
      datedeb = [];
      datefin = [];
      titletab = [];
      j=0;
  </script>
  {% for examen in data %}
        <script type=\"text/javascript\">
                dateD=new Date(\"{{examen.date.date}}\");
                dateD.setHours(new Date(\"{{examen.heureDeb.date}}\").getHours());
                dateD.setMinutes(new Date(\"{{examen.heureDeb.date}}\").getMinutes());
                datedeb[j]=dateD;
                titletab[j]= \"{{examen.type~' '~examen.annee.nom~' '~examen.matiere.nom~' '~examen.classe.nom}}\";
                dateF=new Date(\"{{examen.date.date}}\")
                dateF.setHours(new Date(\"{{examen.heureFin.date}}\").getHours());
                dateF.setMinutes(new Date(\"{{examen.heureFin.date}}\").getMinutes());
                datefin[j]=dateF;
                j++;
        </script>
  {% endfor %}

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

    <!-- Modal -->
    <div class=\"modal fade\" id=\"addEventModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">&times;</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"col-md-12\"> 
                {{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }}
                    <div class=\"form-group\">
                      {{ form_label(form.matiere,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          {{ form_widget(form.matiere,{ 'id':'selectMatiere', 'label_attr': {'class': 'form-control select'} }) }}
                          </div>
                        {{ form_errors(form.matiere) }}
                      </div>
                    </div>

                    <div class=\"form-group\">
                      {{ form_label(form.classe,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          {{ form_widget(form.classe,{ 'id':'selectClasse', 'label_attr': {'class': 'form-control select'} }) }}
                          </div>
                        {{ form_errors(form.classe) }}
                      </div>
                    </div>
                    <div class=\"form-group\">
                      {{ form_label(form.type,null,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                      <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                          {{ form_widget(form.type,{ 'label_attr': {'class': 'form-control select'} }) }}
                        </div>
                        {{ form_errors(form.type) }}
                      </div>
                    </div>
                    <input hidden=\"hidden\" name=\"date\" class=\"date\" />
                    <input hidden=\"hidden\" name=\"heureDeb\" class=\"heureDeb\" />
                    <input hidden=\"hidden\" name=\"heureFin\" class=\"heureFin\" />
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'global.close'|trans}}</button>
            <input type=\"submit\" value=\"{{'add'|trans}}\" class=\"btn btn-primary pull-right\" />
            {{ form_end(form) }}
         </div>
        </div>
      </div>
    </div>
<style type=\"text/css\">
.hidden-row{
  display: none;
}
</style>
{% endblock %}

{% block javascripts %}
    
    

  <script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/lang/fr.js')}}\"></script>

    <script type=\"text/javascript\">
      \$( document ).ready(function() {
        
        \$('#selectMatiere').selectpicker({
          style: 'btn-default',
            size: 4
        });

        \$('#selectClasse').selectpicker({
          style: 'btn-default',
            size: 4
        });
      

        var calendar = \$('#calendar').fullCalendar({
      
            editable: false,
        
            minTime: \"8:00\",

            maxTime: \"18:00\",

            firstDay: 0,

            timezone : 'local',

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

             selectable: true,

             selectHelper: true,

             select: function(start, end, allDay) {

             \$('#addEventModal').modal('show');
            
             startDate=new Date(start);
             endDate=new Date(end);
             dateStart=startDate.getFullYear()+\"/\"+(startDate.getMonth()+1)+\"/\"+startDate.getDate();
            \$('.date').attr('value',startDate);
            \$('.heureFin').attr('value',endDate);
            \$('.heureDeb').attr('value',startDate);

            /* if (title) {

          
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

             }*/

              calendar.fullCalendar('unselect');

           },

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
        length=j;
        for(var i=0;i<length;i++){
          calendar.fullCalendar('renderEvent',{
            title: titletab[i],
            start: datedeb[i],
            end: datefin[i],
            },true
          );
      };

    });

    </script>
{% endblock %}", "examen/add.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\examen\\add.html.twig");
    }
}
