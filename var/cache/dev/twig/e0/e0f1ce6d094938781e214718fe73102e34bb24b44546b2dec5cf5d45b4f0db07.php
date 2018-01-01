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
        $__internal_f5c165a0109abbf5e45d2389120ff7750ab02f48f4af9cfe9c52a29353a5384e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c165a0109abbf5e45d2389120ff7750ab02f48f4af9cfe9c52a29353a5384e->enter($__internal_f5c165a0109abbf5e45d2389120ff7750ab02f48f4af9cfe9c52a29353a5384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:cantineTrans.html.twig"));

        $__internal_48e63e89f2dfb693f85838bd268aaa06910c9f4fb2a56ee5c4fbce0eb54bf432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e63e89f2dfb693f85838bd268aaa06910c9f4fb2a56ee5c4fbce0eb54bf432->enter($__internal_48e63e89f2dfb693f85838bd268aaa06910c9f4fb2a56ee5c4fbce0eb54bf432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":schoolsViews:cantineTrans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c165a0109abbf5e45d2389120ff7750ab02f48f4af9cfe9c52a29353a5384e->leave($__internal_f5c165a0109abbf5e45d2389120ff7750ab02f48f4af9cfe9c52a29353a5384e_prof);

        
        $__internal_48e63e89f2dfb693f85838bd268aaa06910c9f4fb2a56ee5c4fbce0eb54bf432->leave($__internal_48e63e89f2dfb693f85838bd268aaa06910c9f4fb2a56ee5c4fbce0eb54bf432_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_392b85be47527f4a7e3b18b66e6ae664e84286542c6a98fc470b7fab38541e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392b85be47527f4a7e3b18b66e6ae664e84286542c6a98fc470b7fab38541e67->enter($__internal_392b85be47527f4a7e3b18b66e6ae664e84286542c6a98fc470b7fab38541e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ca63d2f39dfffcda34d88f996b611b1552ab0ce482164d0f7f29f7fbe39d0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca63d2f39dfffcda34d88f996b611b1552ab0ce482164d0f7f29f7fbe39d0b8->enter($__internal_0ca63d2f39dfffcda34d88f996b611b1552ab0ce482164d0f7f29f7fbe39d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ca63d2f39dfffcda34d88f996b611b1552ab0ce482164d0f7f29f7fbe39d0b8->leave($__internal_0ca63d2f39dfffcda34d88f996b611b1552ab0ce482164d0f7f29f7fbe39d0b8_prof);

        
        $__internal_392b85be47527f4a7e3b18b66e6ae664e84286542c6a98fc470b7fab38541e67->leave($__internal_392b85be47527f4a7e3b18b66e6ae664e84286542c6a98fc470b7fab38541e67_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22ccf084ab109fdbd41d2bf3dcf7e3ad4e28735503b1f61e3ada12082ac22bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ccf084ab109fdbd41d2bf3dcf7e3ad4e28735503b1f61e3ada12082ac22bca->enter($__internal_22ccf084ab109fdbd41d2bf3dcf7e3ad4e28735503b1f61e3ada12082ac22bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_023c75871a81168481fb88576ba7a3d62ac89497fe14ad65191f4c8478389f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023c75871a81168481fb88576ba7a3d62ac89497fe14ad65191f4c8478389f4f->enter($__internal_023c75871a81168481fb88576ba7a3d62ac89497fe14ad65191f4c8478389f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "           

";
        
        $__internal_023c75871a81168481fb88576ba7a3d62ac89497fe14ad65191f4c8478389f4f->leave($__internal_023c75871a81168481fb88576ba7a3d62ac89497fe14ad65191f4c8478389f4f_prof);

        
        $__internal_22ccf084ab109fdbd41d2bf3dcf7e3ad4e28735503b1f61e3ada12082ac22bca->leave($__internal_22ccf084ab109fdbd41d2bf3dcf7e3ad4e28735503b1f61e3ada12082ac22bca_prof);

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
