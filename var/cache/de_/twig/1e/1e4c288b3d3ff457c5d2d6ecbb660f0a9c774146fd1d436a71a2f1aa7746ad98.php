<?php

/* programme/show.html.twig */
class __TwigTemplate_e760f481e0fe169f0a4b078a67359fe7402358cbf08b8429aedae8f77e849b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "programme/show.html.twig", 1);
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
        $__internal_25a5d2b170224b860941163e1038aa8c82c8647fc266c978a6d9fb21023d7f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a5d2b170224b860941163e1038aa8c82c8647fc266c978a6d9fb21023d7f53->enter($__internal_25a5d2b170224b860941163e1038aa8c82c8647fc266c978a6d9fb21023d7f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programme/show.html.twig"));

        $__internal_4887154daaccdf708f390982cee96e6001c4bdd51a5dbcae36c4c2e8831e4036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4887154daaccdf708f390982cee96e6001c4bdd51a5dbcae36c4c2e8831e4036->enter($__internal_4887154daaccdf708f390982cee96e6001c4bdd51a5dbcae36c4c2e8831e4036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programme/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a5d2b170224b860941163e1038aa8c82c8647fc266c978a6d9fb21023d7f53->leave($__internal_25a5d2b170224b860941163e1038aa8c82c8647fc266c978a6d9fb21023d7f53_prof);

        
        $__internal_4887154daaccdf708f390982cee96e6001c4bdd51a5dbcae36c4c2e8831e4036->leave($__internal_4887154daaccdf708f390982cee96e6001c4bdd51a5dbcae36c4c2e8831e4036_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4224646af42645ca6c872bb02ee4daad0479f6e2fca618eb7a5f52a731455ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4224646af42645ca6c872bb02ee4daad0479f6e2fca618eb7a5f52a731455ed0->enter($__internal_4224646af42645ca6c872bb02ee4daad0479f6e2fca618eb7a5f52a731455ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65ba2d2c14776088f4f158124235e5057b6a5d7ad0ee270e3f90d8040720f379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ba2d2c14776088f4f158124235e5057b6a5d7ad0ee270e3f90d8040720f379->enter($__internal_65ba2d2c14776088f4f158124235e5057b6a5d7ad0ee270e3f90d8040720f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
        \t\t<div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


";
        
        $__internal_65ba2d2c14776088f4f158124235e5057b6a5d7ad0ee270e3f90d8040720f379->leave($__internal_65ba2d2c14776088f4f158124235e5057b6a5d7ad0ee270e3f90d8040720f379_prof);

        
        $__internal_4224646af42645ca6c872bb02ee4daad0479f6e2fca618eb7a5f52a731455ed0->leave($__internal_4224646af42645ca6c872bb02ee4daad0479f6e2fca618eb7a5f52a731455ed0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bc743efc46451b1aebe8764a28c0307c24c7d0f601e67ef290af74144f505cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc743efc46451b1aebe8764a28c0307c24c7d0f601e67ef290af74144f505cd->enter($__internal_1bc743efc46451b1aebe8764a28c0307c24c7d0f601e67ef290af74144f505cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32eba9fb3e5d128abd29b2c33c1797b0fcb9fc3e96ddf54a95b66626ccbbe8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32eba9fb3e5d128abd29b2c33c1797b0fcb9fc3e96ddf54a95b66626ccbbe8d4->enter($__internal_32eba9fb3e5d128abd29b2c33c1797b0fcb9fc3e96ddf54a95b66626ccbbe8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t
\t\t";
        if ($this->env->isDebug()) {
            // line 21
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 22
        echo "\t\t<script type=\"text/javascript\">
\t\t\t\t\$('.active').removeClass('active');
                \$('.plan').addClass('active');
                \$('.pl').addClass('active');
\t\t\tvar j=0;
\t\t\tdatedeb = [];
\t\t\tdatefin = [];
\t\t\ttitletab = [];
\t\t</script>
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "jour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 32
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "horraire", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["horraire"]) {
                // line 33
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "programme", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                    // line 34
                    echo "\t\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($context["programme"], "jour", array()), "id", array()) == $this->getAttribute($context["jour"], "id", array())) && ($this->getAttribute($this->getAttribute($context["programme"], "horraire", array()), "id", array()) == $this->getAttribute($context["horraire"], "id", array())))) {
                        // line 35
                        echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tvar curr = new Date; 
\t\t\t\t\t\tvar first = curr.getDate() - curr.getDay(); 
\t\t\t\t\t\ti=0;
\t\t\t\t\t\tday=first;
\t\t\t\t\t\tstartDate=new Date(curr.setDate(day));
\t\t\t\t\t\tfor(i=0;i<5;i++){
\t\t\t\t\t\t\tdateD=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateF=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateNom=dateD.toLocaleDateString('fr-FR', { weekday: 'long' });
\t\t\t\t\t\t\tif(dateNom==\"";
                        // line 45
                        echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "nom", array()), "html", null, true);
                        echo "\"){
\t\t\t\t\t\t\t\tdateD.setHours(new Date(\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heureDeb", array()), "date", array()), "html", null, true);
                        echo "\").getHours());
\t\t\t\t\t\t\t\tdateD.setMinutes(new Date(\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heureDeb", array()), "date", array()), "html", null, true);
                        echo "\").getMinutes());
\t\t\t\t\t\t\t\tdatedeb[j]=dateD;
\t\t\t\t\t\t\t\ttitletab[j]= \"";
                        // line 49
                        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["programme"], "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "enseignant", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "salle", array()), "nom", array())), "html", null, true);
                        echo "\" ;
\t\t\t\t\t\t\t\tdateF.setHours(new Date(\"";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heurefin", array()), "date", array()), "html", null, true);
                        echo "\").getHours());
\t\t\t\t\t\t\t\tdateF.setMinutes(new Date(\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heurefin", array()), "date", array()), "html", null, true);
                        echo "\").getMinutes());
\t\t\t\t\t\t\t\tdatefin[j]=dateF;
\t\t\t\t\t\t\t\tj++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tday++;

\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horraire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/lang/fr.js"), "html", null, true);
        echo "\"></script>

\t\t<script type=\"text/javascript\">
\t\t\t\$( document ).ready(function() {
\t\t\t
\t\t\tvar curr = new Date; // get current date
\t\t\tvar first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
\t\t\t    
\t\t\ti=0;
\t\t\tday=first;
\t\t\t/*for(i=0;i<5;i++){
\t\t\t\talert(new Date(curr.setDate(day)).toLocaleDateString('fr-FR', { weekday: 'long' }));
\t\t\t\tday++;

\t\t\t}*/

\t\t\t

\t\tvar calendar = \$('#calendar').fullCalendar({
\t\t\t
\t\t\t\teditable: false,
\t\t\t\t
\t\t\t\tminTime: \"8:00\",

                maxTime: \"18:00\",

                firstDay: 0,

                hiddenDays: [ 5, 6 ],

\t\t\t\tlang: 'fr',

\t\t\t\tdefaultView: 'agendaWeek',
\t\t\t   \t
\t\t\t   \theader: {
\t\t\t\t\tleft: 'prev,next today',
\t\t\t    \tcenter: 'title',
\t\t\t    \tright: 'agendaWeek,agendaDay'
\t\t\t   \t},


\t\t\t   events: \"events.php\",
\t\t\t   
\t\t\t   eventRender: function(event, element, view) {

\t\t\t\t    if (event.allDay === 'true') {

\t\t\t\t     event.allDay = true;

\t\t\t\t    } else {

\t\t\t\t     event.allDay = false;

\t\t\t\t    }

\t\t\t   },

\t\t\t\t   selectable: true,

\t\t\t\t   selectHelper: true,

\t\t\t\t   select: function(start, end, allDay) {

\t\t\t\t\t   var title = prompt('Event Title:');


\t\t\t\t\t   if (title) {

\t\t\t\t\t\t  // var start = \$.fullCalendar.formatDate(start, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t\t //  var end = \$.fullCalendar.formatDate(end, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t\t   \$.ajax({

\t\t\t\t\t\t\t   url: 'add_events.php',

\t\t\t\t\t\t\t   data: 'title='+ title+'&start='+ start +'&end='+ end,

\t\t\t\t\t\t\t   type: \"POST\",

\t\t\t\t\t\t\t   success: function(json) {

\t\t\t\t\t\t\t   alert('Added Successfully');

\t\t\t\t\t\t\t   }

\t\t\t\t\t\t   });

\t\t\t\t\t\t   calendar.fullCalendar('renderEvent',{

\t\t\t\t\t\t\t\t   title: title,

\t\t\t\t\t\t\t\t   start: start,

\t\t\t\t\t\t\t\t   end: end,

\t\t\t\t\t\t\t\t   allDay: allDay
\t\t\t\t\t\t\t\t\t},true
\t\t\t\t\t\t\t);

\t\t\t\t\t   }

\t\t\t\t   \t\tcalendar.fullCalendar('unselect');

\t\t\t\t   },


\t\t\t\t   eventDrop: function(event, delta) {

\t\t\t\t\t   var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t   var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t   \$.ajax({

\t\t\t\t\t\t   url: 'update_events.php',

\t\t\t\t\t\t   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t\t\t\t\t   type: \"POST\",

\t\t\t\t\t\t   success: function(json) {

\t\t\t\t\t\t    alert(\"Updated Successfully\");

\t\t\t\t\t\t   }

\t\t\t\t\t   });

\t\t\t\t   },

\t\t\t\t   eventClick: function(event) {

\t\t\t\t\t\tvar decision = confirm(\"Do you really want to do that?\"); 

\t\t\t\t\t\tif (decision) {

\t\t\t\t\t\t\t\$.ajax({

\t\t\t\t\t\t\t\ttype: \"POST\",

\t\t\t\t\t\t\t\turl: \"delete_event.php\",

\t\t\t\t\t\t\t\tdata: \"&id=\" + event.id,

\t\t\t\t\t\t\t\t success: function(json) {

\t\t\t\t\t\t\t\t\t \$('#calendar').fullCalendar('removeEvents', event.id);

\t\t\t\t\t\t\t\t\t  alert(\"Updated Successfully\");}

\t\t\t\t\t\t\t});

\t\t\t\t\t\t}

\t\t\t\t  \t},

\t\t\t\t   eventResize: function(event) {

\t\t\t\t\t   var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

\t\t\t\t\t   var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

\t\t\t\t\t   \$.ajax({

\t\t\t\t\t    url: 'update_events.php',

\t\t\t\t\t    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t\t\t\t    type: \"POST\",

\t\t\t\t\t    success: function(json) {

\t\t\t\t\t     alert(\"Updated Successfully\");

\t\t\t\t\t    }

\t\t\t\t\t   });

\t\t\t\t\t}
\t\t});
\t\t\tlength=j;
\t\t\tfor(var i=0;i<length;i++){
\t\t\t\tcalendar.fullCalendar('renderEvent',{
\t\t\t\t\ttitle: titletab[i],
\t\t   \t\t\tstart: datedeb[i],
\t\t   \t\t\tend: datefin[i],
\t\t\t\t\t},true
\t\t\t\t);
\t\t\t};

\t\t\t\$('#calendar').fullCalendar('gotoDate', startDate);
\t\t  \t
\t\t  });

\t\t</script>
";
        
        $__internal_32eba9fb3e5d128abd29b2c33c1797b0fcb9fc3e96ddf54a95b66626ccbbe8d4->leave($__internal_32eba9fb3e5d128abd29b2c33c1797b0fcb9fc3e96ddf54a95b66626ccbbe8d4_prof);

        
        $__internal_1bc743efc46451b1aebe8764a28c0307c24c7d0f601e67ef290af74144f505cd->leave($__internal_1bc743efc46451b1aebe8764a28c0307c24c7d0f601e67ef290af74144f505cd_prof);

    }

    public function getTemplateName()
    {
        return "programme/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  180 => 63,  174 => 62,  168 => 61,  162 => 60,  150 => 51,  146 => 50,  142 => 49,  137 => 47,  133 => 46,  129 => 45,  117 => 35,  114 => 34,  109 => 33,  104 => 32,  100 => 31,  89 => 22,  86 => 21,  82 => 20,  73 => 19,  50 => 4,  41 => 3,  11 => 1,);
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

\t<div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
        \t\t<div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


{% endblock %}

{% block javascripts %}
\t\t
\t\t{% dump(data) %}
\t\t<script type=\"text/javascript\">
\t\t\t\t\$('.active').removeClass('active');
                \$('.plan').addClass('active');
                \$('.pl').addClass('active');
\t\t\tvar j=0;
\t\t\tdatedeb = [];
\t\t\tdatefin = [];
\t\t\ttitletab = [];
\t\t</script>
\t{% for jour in data.jour %}
\t\t{% for horraire in data.horraire %}
\t\t\t{% for programme in data.programme %}
\t\t\t\t{% if programme.jour.id==jour.id and programme.horraire.id==horraire.id %}
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tvar curr = new Date; 
\t\t\t\t\t\tvar first = curr.getDate() - curr.getDay(); 
\t\t\t\t\t\ti=0;
\t\t\t\t\t\tday=first;
\t\t\t\t\t\tstartDate=new Date(curr.setDate(day));
\t\t\t\t\t\tfor(i=0;i<5;i++){
\t\t\t\t\t\t\tdateD=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateF=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateNom=dateD.toLocaleDateString('fr-FR', { weekday: 'long' });
\t\t\t\t\t\t\tif(dateNom==\"{{jour.nom}}\"){
\t\t\t\t\t\t\t\tdateD.setHours(new Date(\"{{horraire.heureDeb.date}}\").getHours());
\t\t\t\t\t\t\t\tdateD.setMinutes(new Date(\"{{horraire.heureDeb.date}}\").getMinutes());
\t\t\t\t\t\t\t\tdatedeb[j]=dateD;
\t\t\t\t\t\t\t\ttitletab[j]= \"{{programme.matiere.nom~' '~programme.enseignant.nom~' '~programme.salle.nom}}\" ;
\t\t\t\t\t\t\t\tdateF.setHours(new Date(\"{{horraire.heurefin.date}}\").getHours());
\t\t\t\t\t\t\t\tdateF.setMinutes(new Date(\"{{horraire.heurefin.date}}\").getMinutes());
\t\t\t\t\t\t\t\tdatefin[j]=dateF;
\t\t\t\t\t\t\t\tj++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tday++;

\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t{% endfor %}
\t{% endfor %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/fullcalendar.min.js')}}\"></script>
\t<script type=\"text/javascript\" src=\"{{ asset('js/plugins/fullcalendar/lang/fr.js')}}\"></script>

\t\t<script type=\"text/javascript\">
\t\t\t\$( document ).ready(function() {
\t\t\t
\t\t\tvar curr = new Date; // get current date
\t\t\tvar first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
\t\t\t    
\t\t\ti=0;
\t\t\tday=first;
\t\t\t/*for(i=0;i<5;i++){
\t\t\t\talert(new Date(curr.setDate(day)).toLocaleDateString('fr-FR', { weekday: 'long' }));
\t\t\t\tday++;

\t\t\t}*/

\t\t\t

\t\tvar calendar = \$('#calendar').fullCalendar({
\t\t\t
\t\t\t\teditable: false,
\t\t\t\t
\t\t\t\tminTime: \"8:00\",

                maxTime: \"18:00\",

                firstDay: 0,

                hiddenDays: [ 5, 6 ],

\t\t\t\tlang: 'fr',

\t\t\t\tdefaultView: 'agendaWeek',
\t\t\t   \t
\t\t\t   \theader: {
\t\t\t\t\tleft: 'prev,next today',
\t\t\t    \tcenter: 'title',
\t\t\t    \tright: 'agendaWeek,agendaDay'
\t\t\t   \t},


\t\t\t   events: \"events.php\",
\t\t\t   
\t\t\t   eventRender: function(event, element, view) {

\t\t\t\t    if (event.allDay === 'true') {

\t\t\t\t     event.allDay = true;

\t\t\t\t    } else {

\t\t\t\t     event.allDay = false;

\t\t\t\t    }

\t\t\t   },

\t\t\t\t   selectable: true,

\t\t\t\t   selectHelper: true,

\t\t\t\t   select: function(start, end, allDay) {

\t\t\t\t\t   var title = prompt('Event Title:');


\t\t\t\t\t   if (title) {

\t\t\t\t\t\t  // var start = \$.fullCalendar.formatDate(start, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t\t //  var end = \$.fullCalendar.formatDate(end, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t\t   \$.ajax({

\t\t\t\t\t\t\t   url: 'add_events.php',

\t\t\t\t\t\t\t   data: 'title='+ title+'&start='+ start +'&end='+ end,

\t\t\t\t\t\t\t   type: \"POST\",

\t\t\t\t\t\t\t   success: function(json) {

\t\t\t\t\t\t\t   alert('Added Successfully');

\t\t\t\t\t\t\t   }

\t\t\t\t\t\t   });

\t\t\t\t\t\t   calendar.fullCalendar('renderEvent',{

\t\t\t\t\t\t\t\t   title: title,

\t\t\t\t\t\t\t\t   start: start,

\t\t\t\t\t\t\t\t   end: end,

\t\t\t\t\t\t\t\t   allDay: allDay
\t\t\t\t\t\t\t\t\t},true
\t\t\t\t\t\t\t);

\t\t\t\t\t   }

\t\t\t\t   \t\tcalendar.fullCalendar('unselect');

\t\t\t\t   },


\t\t\t\t   eventDrop: function(event, delta) {

\t\t\t\t\t   var start = \$.fullCalendar.formatDate(event.start, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t   var end = \$.fullCalendar.formatDate(event.end, \"Y-MM-DD HH:mm:ss\");

\t\t\t\t\t   \$.ajax({

\t\t\t\t\t\t   url: 'update_events.php',

\t\t\t\t\t\t   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t\t\t\t\t   type: \"POST\",

\t\t\t\t\t\t   success: function(json) {

\t\t\t\t\t\t    alert(\"Updated Successfully\");

\t\t\t\t\t\t   }

\t\t\t\t\t   });

\t\t\t\t   },

\t\t\t\t   eventClick: function(event) {

\t\t\t\t\t\tvar decision = confirm(\"Do you really want to do that?\"); 

\t\t\t\t\t\tif (decision) {

\t\t\t\t\t\t\t\$.ajax({

\t\t\t\t\t\t\t\ttype: \"POST\",

\t\t\t\t\t\t\t\turl: \"delete_event.php\",

\t\t\t\t\t\t\t\tdata: \"&id=\" + event.id,

\t\t\t\t\t\t\t\t success: function(json) {

\t\t\t\t\t\t\t\t\t \$('#calendar').fullCalendar('removeEvents', event.id);

\t\t\t\t\t\t\t\t\t  alert(\"Updated Successfully\");}

\t\t\t\t\t\t\t});

\t\t\t\t\t\t}

\t\t\t\t  \t},

\t\t\t\t   eventResize: function(event) {

\t\t\t\t\t   var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

\t\t\t\t\t   var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

\t\t\t\t\t   \$.ajax({

\t\t\t\t\t    url: 'update_events.php',

\t\t\t\t\t    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,

\t\t\t\t\t    type: \"POST\",

\t\t\t\t\t    success: function(json) {

\t\t\t\t\t     alert(\"Updated Successfully\");

\t\t\t\t\t    }

\t\t\t\t\t   });

\t\t\t\t\t}
\t\t});
\t\t\tlength=j;
\t\t\tfor(var i=0;i<length;i++){
\t\t\t\tcalendar.fullCalendar('renderEvent',{
\t\t\t\t\ttitle: titletab[i],
\t\t   \t\t\tstart: datedeb[i],
\t\t   \t\t\tend: datefin[i],
\t\t\t\t\t},true
\t\t\t\t);
\t\t\t};

\t\t\t\$('#calendar').fullCalendar('gotoDate', startDate);
\t\t  \t
\t\t  });

\t\t</script>
{% endblock %}", "programme/show.html.twig", "C:\\wamp64\\www\\SCHOOL\\app\\Resources\\views\\programme\\show.html.twig");
    }
}
