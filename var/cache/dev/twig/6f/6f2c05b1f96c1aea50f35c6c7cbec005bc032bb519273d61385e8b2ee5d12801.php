<?php

/* :anneesViews:listAnnees.html.twig */
class __TwigTemplate_e2ee73f99c908f3da35be26e6f4e83e0362add6c700dcbbbe8a32f5dab13af6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":anneesViews:listAnnees.html.twig", 1);
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
        $__internal_cc5e6b2bae6f4fb66eae566f86112d2ac362d6c0db0d28f3a1bff8c9afb80272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5e6b2bae6f4fb66eae566f86112d2ac362d6c0db0d28f3a1bff8c9afb80272->enter($__internal_cc5e6b2bae6f4fb66eae566f86112d2ac362d6c0db0d28f3a1bff8c9afb80272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $__internal_628bdde889632791ca5d642631845937f5698bcd3fdb575810da0a5dfd519f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628bdde889632791ca5d642631845937f5698bcd3fdb575810da0a5dfd519f6f->enter($__internal_628bdde889632791ca5d642631845937f5698bcd3fdb575810da0a5dfd519f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":anneesViews:listAnnees.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5e6b2bae6f4fb66eae566f86112d2ac362d6c0db0d28f3a1bff8c9afb80272->leave($__internal_cc5e6b2bae6f4fb66eae566f86112d2ac362d6c0db0d28f3a1bff8c9afb80272_prof);

        
        $__internal_628bdde889632791ca5d642631845937f5698bcd3fdb575810da0a5dfd519f6f->leave($__internal_628bdde889632791ca5d642631845937f5698bcd3fdb575810da0a5dfd519f6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38b601325238b6fb2e4e2f5089c36084c9996c3b0dabd982945ae4ca4582a4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b601325238b6fb2e4e2f5089c36084c9996c3b0dabd982945ae4ca4582a4a8->enter($__internal_38b601325238b6fb2e4e2f5089c36084c9996c3b0dabd982945ae4ca4582a4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c137dde288afef85af44888c8798d2687b5c64d9b3830d1263da00d67028405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c137dde288afef85af44888c8798d2687b5c64d9b3830d1263da00d67028405->enter($__internal_4c137dde288afef85af44888c8798d2687b5c64d9b3830d1263da00d67028405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("annee"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["annee"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "niveau", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annee"], "specialite", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeAnnee", array("id" => $this->getAttribute($context["annee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_4c137dde288afef85af44888c8798d2687b5c64d9b3830d1263da00d67028405->leave($__internal_4c137dde288afef85af44888c8798d2687b5c64d9b3830d1263da00d67028405_prof);

        
        $__internal_38b601325238b6fb2e4e2f5089c36084c9996c3b0dabd982945ae4ca4582a4a8->leave($__internal_38b601325238b6fb2e4e2f5089c36084c9996c3b0dabd982945ae4ca4582a4a8_prof);

    }

    public function getTemplateName()
    {
        return ":anneesViews:listAnnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'annee'|trans}}</h1>
\t<ol>
\t\t{% for annee in annees %}
\t\t\t<li>{{ annee.nom}} {{ annee.niveau}} {{ annee.specialite}} <a href=\"{{ path('editAnnee',{'id':annee.id})}}\">Modifier</a> <a href=\"{{ path('removeAnnee',{'id':annee.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":anneesViews:listAnnees.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/anneesViews/listAnnees.html.twig");
    }
}
