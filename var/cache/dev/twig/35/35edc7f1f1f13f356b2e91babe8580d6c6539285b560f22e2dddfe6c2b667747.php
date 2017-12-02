<?php

/* :travailrealise:add.html.twig */
class __TwigTemplate_c2dfb883ef8ba9d4d2b2dae12904ec7c73d998a5b287dabd2764cbd64c674a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":travailrealise:add.html.twig", 1);
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
        $__internal_52309b5de248265f8f8790d045e72a0ad9006cab9e557f6f9a245df918ae7103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52309b5de248265f8f8790d045e72a0ad9006cab9e557f6f9a245df918ae7103->enter($__internal_52309b5de248265f8f8790d045e72a0ad9006cab9e557f6f9a245df918ae7103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $__internal_eda9200832c8ea4286810410f5d5833f13cf4eafe9bec8a320a3697f880659a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda9200832c8ea4286810410f5d5833f13cf4eafe9bec8a320a3697f880659a0->enter($__internal_eda9200832c8ea4286810410f5d5833f13cf4eafe9bec8a320a3697f880659a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":travailrealise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52309b5de248265f8f8790d045e72a0ad9006cab9e557f6f9a245df918ae7103->leave($__internal_52309b5de248265f8f8790d045e72a0ad9006cab9e557f6f9a245df918ae7103_prof);

        
        $__internal_eda9200832c8ea4286810410f5d5833f13cf4eafe9bec8a320a3697f880659a0->leave($__internal_eda9200832c8ea4286810410f5d5833f13cf4eafe9bec8a320a3697f880659a0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f77ee55f48ca9418824e5c6a88d3df6f90152e2b03278c8a2f984e221289aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f77ee55f48ca9418824e5c6a88d3df6f90152e2b03278c8a2f984e221289aa8->enter($__internal_8f77ee55f48ca9418824e5c6a88d3df6f90152e2b03278c8a2f984e221289aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5ba2f47896d14fc0ab67cc1911aeab5b175a44f9de746c0b3738af7ba705eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ba2f47896d14fc0ab67cc1911aeab5b175a44f9de746c0b3738af7ba705eb2->enter($__internal_d5ba2f47896d14fc0ab67cc1911aeab5b175a44f9de746c0b3738af7ba705eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
";
        if ($this->env->isDebug()) {
            // line 6
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        }
        // line 7
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<button type=\"submit\">Valider</button>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_d5ba2f47896d14fc0ab67cc1911aeab5b175a44f9de746c0b3738af7ba705eb2->leave($__internal_d5ba2f47896d14fc0ab67cc1911aeab5b175a44f9de746c0b3738af7ba705eb2_prof);

        
        $__internal_8f77ee55f48ca9418824e5c6a88d3df6f90152e2b03278c8a2f984e221289aa8->leave($__internal_8f77ee55f48ca9418824e5c6a88d3df6f90152e2b03278c8a2f984e221289aa8_prof);

    }

    public function getTemplateName()
    {
        return ":travailrealise:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  56 => 7,  53 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
{% dump(data) %}
\t{{ form_start(form) }}
\t\t
\t\t<button type=\"submit\">Valider</button>
\t{{ form_end(form) }}
</div>

{% endblock %}", ":travailrealise:add.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/travailrealise/add.html.twig");
    }
}
