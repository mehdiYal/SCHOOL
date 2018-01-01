<?php

/* :default:index.html.twig */
class __TwigTemplate_cd1a2a933162d1f01647c730e94d2dbbed41d6e1bb6047a5146aa947184f898b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_705221dd5b7a15f33e0d5941a247bee2a10251881978fce6690e5371100fb1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705221dd5b7a15f33e0d5941a247bee2a10251881978fce6690e5371100fb1ce->enter($__internal_705221dd5b7a15f33e0d5941a247bee2a10251881978fce6690e5371100fb1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_25d8a223cbb0b03f8482cb5842bc7538f4ad4d3969cb32fac8e102ed3c7e1116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d8a223cbb0b03f8482cb5842bc7538f4ad4d3969cb32fac8e102ed3c7e1116->enter($__internal_25d8a223cbb0b03f8482cb5842bc7538f4ad4d3969cb32fac8e102ed3c7e1116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705221dd5b7a15f33e0d5941a247bee2a10251881978fce6690e5371100fb1ce->leave($__internal_705221dd5b7a15f33e0d5941a247bee2a10251881978fce6690e5371100fb1ce_prof);

        
        $__internal_25d8a223cbb0b03f8482cb5842bc7538f4ad4d3969cb32fac8e102ed3c7e1116->leave($__internal_25d8a223cbb0b03f8482cb5842bc7538f4ad4d3969cb32fac8e102ed3c7e1116_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a783ff749beafe1e069588460b9c0265b19e0734391d0559e354397e0190df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a783ff749beafe1e069588460b9c0265b19e0734391d0559e354397e0190df1->enter($__internal_1a783ff749beafe1e069588460b9c0265b19e0734391d0559e354397e0190df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ed397bca5669ba2bd96ff9251678546fb278f1b8073c0f2f24fbea34428a5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed397bca5669ba2bd96ff9251678546fb278f1b8073c0f2f24fbea34428a5b7->enter($__internal_9ed397bca5669ba2bd96ff9251678546fb278f1b8073c0f2f24fbea34428a5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_9ed397bca5669ba2bd96ff9251678546fb278f1b8073c0f2f24fbea34428a5b7->leave($__internal_9ed397bca5669ba2bd96ff9251678546fb278f1b8073c0f2f24fbea34428a5b7_prof);

        
        $__internal_1a783ff749beafe1e069588460b9c0265b19e0734391d0559e354397e0190df1->leave($__internal_1a783ff749beafe1e069588460b9c0265b19e0734391d0559e354397e0190df1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", ":default:index.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/default/index.html.twig");
    }
}
