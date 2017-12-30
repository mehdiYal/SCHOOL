<?php

/* schoolsViews/cantineTrans.html.twig */
class __TwigTemplate_2a7c7f8ad0eceb17d6207ccd4710346a8e1daa5b989ca05874991404dfbc5279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseParent.html.twig", "schoolsViews/cantineTrans.html.twig", 1);
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
        $__internal_81fbbed9f443e5ad7920913a1cab0a065d70056fdae220fac294822d1da446cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fbbed9f443e5ad7920913a1cab0a065d70056fdae220fac294822d1da446cb->enter($__internal_81fbbed9f443e5ad7920913a1cab0a065d70056fdae220fac294822d1da446cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/cantineTrans.html.twig"));

        $__internal_ecf467baec7e7deb1a1e01d885ef6a47655cecab14245e147495f2b14382d184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf467baec7e7deb1a1e01d885ef6a47655cecab14245e147495f2b14382d184->enter($__internal_ecf467baec7e7deb1a1e01d885ef6a47655cecab14245e147495f2b14382d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "schoolsViews/cantineTrans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fbbed9f443e5ad7920913a1cab0a065d70056fdae220fac294822d1da446cb->leave($__internal_81fbbed9f443e5ad7920913a1cab0a065d70056fdae220fac294822d1da446cb_prof);

        
        $__internal_ecf467baec7e7deb1a1e01d885ef6a47655cecab14245e147495f2b14382d184->leave($__internal_ecf467baec7e7deb1a1e01d885ef6a47655cecab14245e147495f2b14382d184_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6d72d7682e5ad8da40f33ee6ecd6367407278898c24bfc70e75ad27ce03270a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d72d7682e5ad8da40f33ee6ecd6367407278898c24bfc70e75ad27ce03270a->enter($__internal_f6d72d7682e5ad8da40f33ee6ecd6367407278898c24bfc70e75ad27ce03270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4ec411101d90681ffa2884df654d8f390ef3c05189f005ee97b838cdb27fc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ec411101d90681ffa2884df654d8f390ef3c05189f005ee97b838cdb27fc9a->enter($__internal_f4ec411101d90681ffa2884df654d8f390ef3c05189f005ee97b838cdb27fc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-title\">                    
        <h2><span class=\"fa fa-cutlery\"></span> Cantine & transports de l'ecole ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "nom", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "menus", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "transports", array()));
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
        
        $__internal_f4ec411101d90681ffa2884df654d8f390ef3c05189f005ee97b838cdb27fc9a->leave($__internal_f4ec411101d90681ffa2884df654d8f390ef3c05189f005ee97b838cdb27fc9a_prof);

        
        $__internal_f6d72d7682e5ad8da40f33ee6ecd6367407278898c24bfc70e75ad27ce03270a->leave($__internal_f6d72d7682e5ad8da40f33ee6ecd6367407278898c24bfc70e75ad27ce03270a_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3fe7669dcd45bf8b57d9522bbdf5acf4e4a1393adc1447abf6629d1fc7fe2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fe7669dcd45bf8b57d9522bbdf5acf4e4a1393adc1447abf6629d1fc7fe2b5->enter($__internal_e3fe7669dcd45bf8b57d9522bbdf5acf4e4a1393adc1447abf6629d1fc7fe2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cbcd53b9d8bb7eac18998a86c1e2f00b241d7bdeb4e4776bc16e920ca04f3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbcd53b9d8bb7eac18998a86c1e2f00b241d7bdeb4e4776bc16e920ca04f3f5->enter($__internal_4cbcd53b9d8bb7eac18998a86c1e2f00b241d7bdeb4e4776bc16e920ca04f3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "           

";
        
        $__internal_4cbcd53b9d8bb7eac18998a86c1e2f00b241d7bdeb4e4776bc16e920ca04f3f5->leave($__internal_4cbcd53b9d8bb7eac18998a86c1e2f00b241d7bdeb4e4776bc16e920ca04f3f5_prof);

        
        $__internal_e3fe7669dcd45bf8b57d9522bbdf5acf4e4a1393adc1447abf6629d1fc7fe2b5->leave($__internal_e3fe7669dcd45bf8b57d9522bbdf5acf4e4a1393adc1447abf6629d1fc7fe2b5_prof);

    }

    public function getTemplateName()
    {
        return "schoolsViews/cantineTrans.html.twig";
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
           

{% endblock %}", "schoolsViews/cantineTrans.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/schoolsViews/cantineTrans.html.twig");
    }
}
