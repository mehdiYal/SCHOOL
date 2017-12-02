<?php

/* :elevesViews:parentEleve.html.twig */
class __TwigTemplate_622c7ff4c62d613cd954f8f3e4823140482df09078769303510ddf24a1d55111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseList.html.twig", ":elevesViews:parentEleve.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyList' => array($this, 'block_bodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseList.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cce55b7a62b64b4b4f017ae9deab413dd872a673a20d26de1cec974b00a2f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cce55b7a62b64b4b4f017ae9deab413dd872a673a20d26de1cec974b00a2f23->enter($__internal_7cce55b7a62b64b4b4f017ae9deab413dd872a673a20d26de1cec974b00a2f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $__internal_357e82d5aa86161f2f12710ce6f6a1f80e0c7f291b0cbbb9a2c3992d86096ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357e82d5aa86161f2f12710ce6f6a1f80e0c7f291b0cbbb9a2c3992d86096ecc->enter($__internal_357e82d5aa86161f2f12710ce6f6a1f80e0c7f291b0cbbb9a2c3992d86096ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:parentEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cce55b7a62b64b4b4f017ae9deab413dd872a673a20d26de1cec974b00a2f23->leave($__internal_7cce55b7a62b64b4b4f017ae9deab413dd872a673a20d26de1cec974b00a2f23_prof);

        
        $__internal_357e82d5aa86161f2f12710ce6f6a1f80e0c7f291b0cbbb9a2c3992d86096ecc->leave($__internal_357e82d5aa86161f2f12710ce6f6a1f80e0c7f291b0cbbb9a2c3992d86096ecc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6dc6fff0945ea8d57bfe1d638db713d27940654d1ded320ac7a57953c6d750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6dc6fff0945ea8d57bfe1d638db713d27940654d1ded320ac7a57953c6d750->enter($__internal_5e6dc6fff0945ea8d57bfe1d638db713d27940654d1ded320ac7a57953c6d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75392ad0f417bb1d2b50938d0a412ba3ace5918e417c1c6142ae84a40f8010a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75392ad0f417bb1d2b50938d0a412ba3ace5918e417c1c6142ae84a40f8010a6->enter($__internal_75392ad0f417bb1d2b50938d0a412ba3ace5918e417c1c6142ae84a40f8010a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t<h1>Pas de parent associé à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo " </h1>
\t<h2>Selectioner un parent</h2>\t
";
        
        $__internal_75392ad0f417bb1d2b50938d0a412ba3ace5918e417c1c6142ae84a40f8010a6->leave($__internal_75392ad0f417bb1d2b50938d0a412ba3ace5918e417c1c6142ae84a40f8010a6_prof);

        
        $__internal_5e6dc6fff0945ea8d57bfe1d638db713d27940654d1ded320ac7a57953c6d750->leave($__internal_5e6dc6fff0945ea8d57bfe1d638db713d27940654d1ded320ac7a57953c6d750_prof);

    }

    // line 8
    public function block_bodyList($context, array $blocks = array())
    {
        $__internal_307d4d7a50f00f1c033524033c027bcfa94f9a7ef3bc90af3ba86f11d1f1510b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307d4d7a50f00f1c033524033c027bcfa94f9a7ef3bc90af3ba86f11d1f1510b->enter($__internal_307d4d7a50f00f1c033524033c027bcfa94f9a7ef3bc90af3ba86f11d1f1510b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        $__internal_e8480b76ad8dd7d2ebcf7aa4cbe7f454b0f06ba57dfe53d3f78a10fd29bcbc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8480b76ad8dd7d2ebcf7aa4cbe7f454b0f06ba57dfe53d3f78a10fd29bcbc9f->enter($__internal_e8480b76ad8dd7d2ebcf7aa4cbe7f454b0f06ba57dfe53d3f78a10fd29bcbc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyList"));

        // line 9
        echo "
    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Associer</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 20
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["parant"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assoParent", array("id" => $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "id", array()), "idp" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>                                    
    </div>
    
";
        
        $__internal_e8480b76ad8dd7d2ebcf7aa4cbe7f454b0f06ba57dfe53d3f78a10fd29bcbc9f->leave($__internal_e8480b76ad8dd7d2ebcf7aa4cbe7f454b0f06ba57dfe53d3f78a10fd29bcbc9f_prof);

        
        $__internal_307d4d7a50f00f1c033524033c027bcfa94f9a7ef3bc90af3ba86f11d1f1510b->leave($__internal_307d4d7a50f00f1c033524033c027bcfa94f9a7ef3bc90af3ba86f11d1f1510b_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:parentEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  101 => 23,  94 => 21,  91 => 20,  87 => 19,  75 => 9,  66 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseList.html.twig' %}

{% block title %}
\t<h1>Pas de parent associé à {{eleve.nom}} {{eleve.prenom}} </h1>
\t<h2>Selectioner un parent</h2>\t
{% endblock %}

{% block bodyList %}

    <div class=\"table-responsive\">
        <table id=\"customers2\" class=\"table datatable\">
            <thead>
                <tr>
                    <th>Nom & Prenom</th>
                    <th>Associer</th>
                </tr>
            </thead>
            <tbody>
                {% for parant in app.user.ecole.parents %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ parant.nom|upper}} {{ parant.prenom}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('assoParent',{'id':eleve.id,'idp':parant.id})}}\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-male\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                {% endfor %}
            </tbody>
        </table>                                    
    </div>
    
{% endblock %}  
", ":elevesViews:parentEleve.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/elevesViews/parentEleve.html.twig");
    }
}
