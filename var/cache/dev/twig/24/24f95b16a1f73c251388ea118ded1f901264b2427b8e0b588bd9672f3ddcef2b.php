<?php

/* :matieresViews:listMatieres.html.twig */
class __TwigTemplate_afc14e46b3ad334e4dbd2f1d00d71f33b8a47a5ad09d0e29521d0db520c9b2ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matieresViews:listMatieres.html.twig", 1);
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
        $__internal_edfd934538d55faca554d340465403f578b5dc05d732420e8996d21f6450d1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfd934538d55faca554d340465403f578b5dc05d732420e8996d21f6450d1e8->enter($__internal_edfd934538d55faca554d340465403f578b5dc05d732420e8996d21f6450d1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $__internal_25c71fb06b22676f51405e85a44378598b0c6111ceb68b12d1ac54c7c96928f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c71fb06b22676f51405e85a44378598b0c6111ceb68b12d1ac54c7c96928f7->enter($__internal_25c71fb06b22676f51405e85a44378598b0c6111ceb68b12d1ac54c7c96928f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matieresViews:listMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfd934538d55faca554d340465403f578b5dc05d732420e8996d21f6450d1e8->leave($__internal_edfd934538d55faca554d340465403f578b5dc05d732420e8996d21f6450d1e8_prof);

        
        $__internal_25c71fb06b22676f51405e85a44378598b0c6111ceb68b12d1ac54c7c96928f7->leave($__internal_25c71fb06b22676f51405e85a44378598b0c6111ceb68b12d1ac54c7c96928f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff67c13b5e78048f45fa34450e4f8ff5327b325f55c8a1c730ba303aa1f8a6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff67c13b5e78048f45fa34450e4f8ff5327b325f55c8a1c730ba303aa1f8a6c7->enter($__internal_ff67c13b5e78048f45fa34450e4f8ff5327b325f55c8a1c730ba303aa1f8a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45eddca57e85d62572349159b2719993dcc2ba7e3d84d01e9d97b335cc04d36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eddca57e85d62572349159b2719993dcc2ba7e3d84d01e9d97b335cc04d36a->enter($__internal_45eddca57e85d62572349159b2719993dcc2ba7e3d84d01e9d97b335cc04d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("matiere"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "description", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeMatiere", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_45eddca57e85d62572349159b2719993dcc2ba7e3d84d01e9d97b335cc04d36a->leave($__internal_45eddca57e85d62572349159b2719993dcc2ba7e3d84d01e9d97b335cc04d36a_prof);

        
        $__internal_ff67c13b5e78048f45fa34450e4f8ff5327b325f55c8a1c730ba303aa1f8a6c7->leave($__internal_ff67c13b5e78048f45fa34450e4f8ff5327b325f55c8a1c730ba303aa1f8a6c7_prof);

    }

    public function getTemplateName()
    {
        return ":matieresViews:listMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'matiere'|trans}}</h1>
\t<ol>
\t\t{% for matiere in matieres %}
\t\t\t<li>{{ matiere.nom}} {{ matiere.description}} <a href=\"{{ path('editMatiere',{'id':matiere.id})}}\">Modifier</a> <a href=\"{{ path('removeMatiere',{'id':matiere.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":matieresViews:listMatieres.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/matieresViews/listMatieres.html.twig");
    }
}
