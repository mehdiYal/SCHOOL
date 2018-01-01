<?php

/* :schoolsViews:cantineTrans.html.twig */
class __TwigTemplate_8181a479784a3738a356159a03e7e1a11829506dea770815ab6eaee524e56074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", ":schoolsViews:cantineTrans.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_192b36bf78e21dcf8f7dfd618a4ec009808ce2e6c7fdcdbcaef6096b991448db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192b36bf78e21dcf8f7dfd618a4ec009808ce2e6c7fdcdbcaef6096b991448db->enter($__internal_192b36bf78e21dcf8f7dfd618a4ec009808ce2e6c7fdcdbcaef6096b991448db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:cantineTrans.html.twig"));

        $__internal_7f596604e6d8b3a10cd56b4128aeb22d1aed07b445e5de7146057cc11f06c3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f596604e6d8b3a10cd56b4128aeb22d1aed07b445e5de7146057cc11f06c3a3->enter($__internal_7f596604e6d8b3a10cd56b4128aeb22d1aed07b445e5de7146057cc11f06c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:cantineTrans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_192b36bf78e21dcf8f7dfd618a4ec009808ce2e6c7fdcdbcaef6096b991448db->leave($__internal_192b36bf78e21dcf8f7dfd618a4ec009808ce2e6c7fdcdbcaef6096b991448db_prof);

        
        $__internal_7f596604e6d8b3a10cd56b4128aeb22d1aed07b445e5de7146057cc11f06c3a3->leave($__internal_7f596604e6d8b3a10cd56b4128aeb22d1aed07b445e5de7146057cc11f06c3a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbee82d2f9feb7b5ddecc761717fff2eb21d937d7904e6099f4fc888f60e62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbee82d2f9feb7b5ddecc761717fff2eb21d937d7904e6099f4fc888f60e62d->enter($__internal_5bbee82d2f9feb7b5ddecc761717fff2eb21d937d7904e6099f4fc888f60e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d9e46a117df07e290e76138007e0d12d62b6e53a485a17479674c05f60f76a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9e46a117df07e290e76138007e0d12d62b6e53a485a17479674c05f60f76a7->enter($__internal_0d9e46a117df07e290e76138007e0d12d62b6e53a485a17479674c05f60f76a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-title\">                    
        <h2><span class=\"fa fa-cutlery\"></span> Cantine & transports de l'ecole ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "nom", array()), "html", null, true);
        echo "</h2>
    </div>
        <!-- END PAGE TITLE -->                
        
        <!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            
            <!-- PAGE CONTENT TABBED -->
            <div class=\"page-tabs\">
                <a href=\"#first-tab\" class=\"active\">Cantine</a>
                <a href=\"#second-tab\">Transports</a>
            </div>
            
            <div class=\"page-content-wrap page-tabs-item active\" id=\"first-tab\">
            
                <div class=\"row table-responsive\">
                    <table id=\"customers2\" class=\"table\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jour</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "menus", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 31
            echo "                                <tr>
                                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "jour", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "menu", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                    </table>                                    
                </div>
            
            </div>
            <div class=\"page-content-wrap page-tabs-item\" id=\"second-tab\">
                <div class=\"row table-responsive\">
                    <table id=\"customers2\" class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Départ</th>
                                <th>Trajet</th>
                                <th>Heure Départ</th>
                                <th>Capacité</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "transports", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trans"]) {
            // line 56
            echo "                                <tr>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["trans"], "nom", array())), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "depart", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "trajet", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trans"], "heureDepart", array()), "h:m"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["trans"], "capacite", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>                                    
                </div>
            </div>
            <!-- END PAGE CONTENT TABBED -->
        </div>            
        <!-- END PAGE CONTENT -->  

";
        
        $__internal_0d9e46a117df07e290e76138007e0d12d62b6e53a485a17479674c05f60f76a7->leave($__internal_0d9e46a117df07e290e76138007e0d12d62b6e53a485a17479674c05f60f76a7_prof);

        
        $__internal_5bbee82d2f9feb7b5ddecc761717fff2eb21d937d7904e6099f4fc888f60e62d->leave($__internal_5bbee82d2f9feb7b5ddecc761717fff2eb21d937d7904e6099f4fc888f60e62d_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83eb1c92a257a8b91ac9c759f6b4be63da98dfe4c8c4ec0563f1503fb05832ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83eb1c92a257a8b91ac9c759f6b4be63da98dfe4c8c4ec0563f1503fb05832ec->enter($__internal_83eb1c92a257a8b91ac9c759f6b4be63da98dfe4c8c4ec0563f1503fb05832ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e85baa18256af46fe598405eda96942706626ec3c6ef6794e3ac834334def97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e85baa18256af46fe598405eda96942706626ec3c6ef6794e3ac834334def97->enter($__internal_4e85baa18256af46fe598405eda96942706626ec3c6ef6794e3ac834334def97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "           

";
        
        $__internal_4e85baa18256af46fe598405eda96942706626ec3c6ef6794e3ac834334def97->leave($__internal_4e85baa18256af46fe598405eda96942706626ec3c6ef6794e3ac834334def97_prof);

        
        $__internal_83eb1c92a257a8b91ac9c759f6b4be63da98dfe4c8c4ec0563f1503fb05832ec->leave($__internal_83eb1c92a257a8b91ac9c759f6b4be63da98dfe4c8c4ec0563f1503fb05832ec_prof);

    }

    public function getTemplateName()
    {
        return ":schoolsViews:cantineTrans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 75,  175 => 74,  157 => 64,  148 => 61,  144 => 60,  140 => 59,  136 => 58,  132 => 57,  129 => 56,  125 => 55,  105 => 37,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  81 => 30,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseParent.html.twig' %}

{% block body %}
    <div class=\"page-title\">                    
        <h2><span class=\"fa fa-cutlery\"></span> Cantine & transports de l'ecole {{ecole.nom}}</h2>
    </div>
        <!-- END PAGE TITLE -->                
        
        <!-- PAGE CONTENT WRAPPER -->
        <div class=\"page-content-wrap\">
            
            <!-- PAGE CONTENT TABBED -->
            <div class=\"page-tabs\">
                <a href=\"#first-tab\" class=\"active\">Cantine</a>
                <a href=\"#second-tab\">Transports</a>
            </div>
            
            <div class=\"page-content-wrap page-tabs-item active\" id=\"first-tab\">
            
                <div class=\"row table-responsive\">
                    <table id=\"customers2\" class=\"table\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jour</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for menu in ecole.menus %}
                                <tr>
                                    <td>{{ menu.id}}</td>
                                    <td>{{ menu.jour}}</td>
                                    <td>{{ menu.menu}}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>                                    
                </div>
            
            </div>
            <div class=\"page-content-wrap page-tabs-item\" id=\"second-tab\">
                <div class=\"row table-responsive\">
                    <table id=\"customers2\" class=\"table\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Départ</th>
                                <th>Trajet</th>
                                <th>Heure Départ</th>
                                <th>Capacité</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for trans in ecole.transports %}
                                <tr>
                                    <td>{{ trans.nom|upper}}</td>
                                    <td>{{ trans.depart}}</td>
                                    <td>{{ trans.trajet}}</td>
                                    <td>{{ trans.heureDepart|date('h:m')}}</td>
                                    <td>{{ trans.capacite}}</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>                                    
                </div>
            </div>
            <!-- END PAGE CONTENT TABBED -->
        </div>            
        <!-- END PAGE CONTENT -->  

{% endblock %}

{% block javascripts %}
           

{% endblock %}", ":schoolsViews:cantineTrans.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/schoolsViews/cantineTrans.html.twig");
    }
}
