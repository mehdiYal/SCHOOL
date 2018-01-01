<?php

/* :programme:show.html.twig */
class __TwigTemplate_3e84073680b64d1848e288d06ebc2936c5980a8341582a1e2c2c3224c9737326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":programme:show.html.twig", 1);
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
        $__internal_4a633210302878708c0970928a38795202dfd58f05e05b5d8328e719c5bdf36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a633210302878708c0970928a38795202dfd58f05e05b5d8328e719c5bdf36b->enter($__internal_4a633210302878708c0970928a38795202dfd58f05e05b5d8328e719c5bdf36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $__internal_14e434a7db95cd03814e828b988648ed2c3290f4635309a204d3cc95abeea94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e434a7db95cd03814e828b988648ed2c3290f4635309a204d3cc95abeea94a->enter($__internal_14e434a7db95cd03814e828b988648ed2c3290f4635309a204d3cc95abeea94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":programme:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a633210302878708c0970928a38795202dfd58f05e05b5d8328e719c5bdf36b->leave($__internal_4a633210302878708c0970928a38795202dfd58f05e05b5d8328e719c5bdf36b_prof);

        
        $__internal_14e434a7db95cd03814e828b988648ed2c3290f4635309a204d3cc95abeea94a->leave($__internal_14e434a7db95cd03814e828b988648ed2c3290f4635309a204d3cc95abeea94a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5d049f6c9ae5e6e3f9ed4b13cb63ec748e84410e1a30319c0ed35a6287fba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5d049f6c9ae5e6e3f9ed4b13cb63ec748e84410e1a30319c0ed35a6287fba9->enter($__internal_1e5d049f6c9ae5e6e3f9ed4b13cb63ec748e84410e1a30319c0ed35a6287fba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5066627b98837ea5579bd786e94f9fc1f25b8e7940f21890c9090e2b70feda91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5066627b98837ea5579bd786e94f9fc1f25b8e7940f21890c9090e2b70feda91->enter($__internal_5066627b98837ea5579bd786e94f9fc1f25b8e7940f21890c9090e2b70feda91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"content-frame-body padding-bottom-0\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"alert_holder\"></div>
                <div class=\"calendar\">                                
        \t\t    <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


";
        
        $__internal_5066627b98837ea5579bd786e94f9fc1f25b8e7940f21890c9090e2b70feda91->leave($__internal_5066627b98837ea5579bd786e94f9fc1f25b8e7940f21890c9090e2b70feda91_prof);

        
        $__internal_1e5d049f6c9ae5e6e3f9ed4b13cb63ec748e84410e1a30319c0ed35a6287fba9->leave($__internal_1e5d049f6c9ae5e6e3f9ed4b13cb63ec748e84410e1a30319c0ed35a6287fba9_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e0784dadb62899f2e847fc991ee9e75cd118f6c49a7ffcf9e2cecb5a081e20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0784dadb62899f2e847fc991ee9e75cd118f6c49a7ffcf9e2cecb5a081e20a->enter($__internal_1e0784dadb62899f2e847fc991ee9e75cd118f6c49a7ffcf9e2cecb5a081e20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b00e8dc6904a9a29a6ddc974391dc878886f7fb01268638ff0d8dc42c248f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b00e8dc6904a9a29a6ddc974391dc878886f7fb01268638ff0d8dc42c248f4e->enter($__internal_7b00e8dc6904a9a29a6ddc974391dc878886f7fb01268638ff0d8dc42c248f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "\t\t
\t\t";
        if ($this->env->isDebug()) {
            // line 24
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 25
        echo "\t\t<script type=\"text/javascript\">
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
\t\t\t\t\t\tvar month= curr.getMonth();
\t\t\t\t\t\tvar year= curr.getFullYear();
\t\t\t\t\t\ti=0;
\t\t\t\t\t\tday=first;
\t\t\t\t\t\t
\t\t\t\t\t\tvar d= new Date(curr.getFullYear(), curr.getMonth()+1, 0);
    \t

\t\t\t\t\t\tstartDate=new Date(curr.setDate(day));
\t\t\t\t\t\tfor(i=0;i<5;i++){
\t\t\t\t\t\t\tdateD=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateF=new Date(curr.setDate(day));
\t\t\t\t\t\t\tdateNom=dateD.toLocaleDateString('fr-FR', { weekday: 'long' });
\t\t\t\t\t\t\tif(dateNom==\"";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "nom", array()), "html", null, true);
                        echo "\"){
\t\t\t\t\t\t\t\tdateD.setHours(new Date(\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heureDeb", array()), "date", array()), "html", null, true);
                        echo "\").getHours());
\t\t\t\t\t\t\t\tdateD.setMinutes(new Date(\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heureDeb", array()), "date", array()), "html", null, true);
                        echo "\").getMinutes());
\t\t\t\t\t\t\t\tdatedeb[j]=dateD;
\t\t\t\t\t\t\t\ttitletab[j]= \"";
                        // line 55
                        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["programme"], "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "enseignant", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "salle", array()), "nom", array())), "html", null, true);
                        echo "\" ;
\t\t\t\t\t\t\t\tdateF.setHours(new Date(\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heurefin", array()), "date", array()), "html", null, true);
                        echo "\").getHours());
\t\t\t\t\t\t\t\tdateF.setMinutes(new Date(\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horraire"], "heurefin", array()), "date", array()), "html", null, true);
                        echo "\").getMinutes());
\t\t\t\t\t\t\t\tdatefin[j]=dateF;
\t\t\t\t\t\t\t\tj++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(day+1>d.getDate()){
\t\t\t\t\t\t\t\tmonth++;
\t\t\t\t\t\t\t\tif(month>12){
\t\t\t\t\t\t\t\t\tmonth=1;
\t\t\t\t\t\t\t\t\tyear++;
\t\t\t\t\t\t\t\t\tcurr.setFullYear(year);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tcurr.setMonth(month);
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\tday=(day+1)% d.getDate();
\t\t\t\t\t\t\t//alert(day);
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horraire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 79
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
\t\t\t
\t\t\t
\t\t\tfor(var i=0;i<length;i++){
\t\t\t\tcalendar.fullCalendar('renderEvent',{
\t\t\t\t\ttitle: titletab[i],
\t\t   \t\t\tstart: datedeb[i],
\t\t   \t\t\tend: datefin[i],
\t\t\t\t\t},true
\t\t\t\t);
\t\t\t};
\t\t\t//\$('#calendar').fullCalendar('gotoDate', startDate);
\t\t  \t
\t\t  });
\t\t</script>
";
        
        $__internal_7b00e8dc6904a9a29a6ddc974391dc878886f7fb01268638ff0d8dc42c248f4e->leave($__internal_7b00e8dc6904a9a29a6ddc974391dc878886f7fb01268638ff0d8dc42c248f4e_prof);

        
        $__internal_1e0784dadb62899f2e847fc991ee9e75cd118f6c49a7ffcf9e2cecb5a081e20a->leave($__internal_1e0784dadb62899f2e847fc991ee9e75cd118f6c49a7ffcf9e2cecb5a081e20a_prof);

    }

    public function getTemplateName()
    {
        return ":programme:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 79,  192 => 78,  186 => 77,  180 => 76,  174 => 75,  153 => 57,  149 => 56,  145 => 55,  140 => 53,  136 => 52,  132 => 51,  114 => 35,  111 => 34,  106 => 33,  101 => 32,  97 => 31,  89 => 25,  86 => 24,  82 => 23,  73 => 22,  50 => 7,  41 => 6,  11 => 1,);
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
        \t\t    <div id=\"calendar\"></div>                            
                </div>
            </div>
        </div>
    </div>   


{% endblock %}

{% block javascripts %}
\t\t
\t\t{% dump(data) %}
\t\t<script type=\"text/javascript\">
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
\t\t\t\t\t\tvar month= curr.getMonth();
\t\t\t\t\t\tvar year= curr.getFullYear();
\t\t\t\t\t\ti=0;
\t\t\t\t\t\tday=first;
\t\t\t\t\t\t
\t\t\t\t\t\tvar d= new Date(curr.getFullYear(), curr.getMonth()+1, 0);
    \t

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
\t\t\t\t\t\t\tif(day+1>d.getDate()){
\t\t\t\t\t\t\t\tmonth++;
\t\t\t\t\t\t\t\tif(month>12){
\t\t\t\t\t\t\t\t\tmonth=1;
\t\t\t\t\t\t\t\t\tyear++;
\t\t\t\t\t\t\t\t\tcurr.setFullYear(year);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tcurr.setMonth(month);
\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\tday=(day+1)% d.getDate();
\t\t\t\t\t\t\t//alert(day);
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
\t\t\t
\t\t\t
\t\t\tfor(var i=0;i<length;i++){
\t\t\t\tcalendar.fullCalendar('renderEvent',{
\t\t\t\t\ttitle: titletab[i],
\t\t   \t\t\tstart: datedeb[i],
\t\t   \t\t\tend: datefin[i],
\t\t\t\t\t},true
\t\t\t\t);
\t\t\t};
\t\t\t//\$('#calendar').fullCalendar('gotoDate', startDate);
\t\t  \t
\t\t  });
\t\t</script>
{% endblock %}", ":programme:show.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/programme/show.html.twig");
    }
}
