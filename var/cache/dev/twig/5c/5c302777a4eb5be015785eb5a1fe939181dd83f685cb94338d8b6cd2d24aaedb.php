<?php

/* SchoolsViews/profileSchool.html.twig */
class __TwigTemplate_96f10942d077e0203e2d020b3cab5c4ea96846b863d7928308cce118facf84d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolsViews/profileSchool.html.twig", 1);
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
        $__internal_e74ca989de344d01c856ada5eaf90cd8b216e9050252a28ab3ec1c1bad7f4edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74ca989de344d01c856ada5eaf90cd8b216e9050252a28ab3ec1c1bad7f4edd->enter($__internal_e74ca989de344d01c856ada5eaf90cd8b216e9050252a28ab3ec1c1bad7f4edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolsViews/profileSchool.html.twig"));

        $__internal_d506d5e6b0774a668933051527fbe909c86dddd9994878e468e50ae8cacebfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506d5e6b0774a668933051527fbe909c86dddd9994878e468e50ae8cacebfce->enter($__internal_d506d5e6b0774a668933051527fbe909c86dddd9994878e468e50ae8cacebfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolsViews/profileSchool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74ca989de344d01c856ada5eaf90cd8b216e9050252a28ab3ec1c1bad7f4edd->leave($__internal_e74ca989de344d01c856ada5eaf90cd8b216e9050252a28ab3ec1c1bad7f4edd_prof);

        
        $__internal_d506d5e6b0774a668933051527fbe909c86dddd9994878e468e50ae8cacebfce->leave($__internal_d506d5e6b0774a668933051527fbe909c86dddd9994878e468e50ae8cacebfce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e21f907a255f6fb499777279b85d971583f555dad7d127111372aa5662004bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21f907a255f6fb499777279b85d971583f555dad7d127111372aa5662004bd0->enter($__internal_e21f907a255f6fb499777279b85d971583f555dad7d127111372aa5662004bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07032e6d53df8abce2f6b0278c8d5118835d8754123acd1d194689b11b82d8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07032e6d53df8abce2f6b0278c8d5118835d8754123acd1d194689b11b82d8be->enter($__internal_07032e6d53df8abce2f6b0278c8d5118835d8754123acd1d194689b11b82d8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "nom", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "ville", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>logo :</b><img src=\"";
        // line 6
        if ($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "logo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/logos/" . $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "logo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/logos/logo.jpg"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "code", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>ville :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "ville", array()), "html", null, true);
        echo "</li>
\t\t<li><b>pays :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "pays", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date De Creation :</b>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>informations :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "informations", array()), "html", null, true);
        echo "</li>
\t\t<li><b>admin :</b>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "admin", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "admin", array()), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des parents dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "parents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 21
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "prenom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des enseignants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "enseignants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
            // line 29
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "prenom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des eleves dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["ecole"] ?? $this->getContext($context, "ecole")), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 37
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
";
        
        $__internal_07032e6d53df8abce2f6b0278c8d5118835d8754123acd1d194689b11b82d8be->leave($__internal_07032e6d53df8abce2f6b0278c8d5118835d8754123acd1d194689b11b82d8be_prof);

        
        $__internal_e21f907a255f6fb499777279b85d971583f555dad7d127111372aa5662004bd0->leave($__internal_e21f907a255f6fb499777279b85d971583f555dad7d127111372aa5662004bd0_prof);

    }

    public function getTemplateName()
    {
        return "SchoolsViews/profileSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 39,  158 => 37,  154 => 36,  147 => 31,  136 => 29,  132 => 28,  125 => 23,  114 => 21,  110 => 20,  101 => 16,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Profile De {{ecole.nom}} à {{ecole.ville}}</h1>
\t<ul>
\t\t<li><b>logo :</b><img src=\"{% if ecole.logo %}{{ asset('uploads/logos/' ~ ecole.logo) }}{% else %}{{ asset('uploads/logos/logo.jpg') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{ecole.nom}}</li>
\t\t<li><b>code :</b>{{ecole.code}}</li>
\t\t<li><b>adresse :</b>{{ecole.adresse}}</li>
\t\t<li><b>ville :</b>{{ecole.ville}}</li>
\t\t<li><b>pays :</b>{{ecole.pays}}</li>
\t\t<li><b>telephone :</b>{{ecole.telephone}}</li>
\t\t<li><b>email :</b>{{ecole.email}}</li>
\t\t<li><b>date De Creation :</b>{{ecole.dateCreation|date('Y-m-d')}}</li>
\t\t<li><b>informations :</b>{{ecole.informations}}</li>
\t\t<li><b>admin :</b>{{ecole.admin.nom}} {{ecole.admin.prenom}}</li>
\t\t<li>
\t\t\t<b>Liste des parents dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for parent in ecole.parents %}
\t\t\t\t\t<li>{{parent.nom}} {{parent.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des enseignants dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for ens in ecole.enseignants %}
\t\t\t\t\t<li>{{ens.nom}} {{ens.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des eleves dans l'ecole</b>
\t\t\t<ul>
\t\t\t\t{% for eleve in ecole.eleves %}
\t\t\t\t\t<li>{{eleve.nom}} {{eleve.prenom}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
{% endblock %}", "SchoolsViews/profileSchool.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/SchoolsViews/profileSchool.html.twig");
    }
}
