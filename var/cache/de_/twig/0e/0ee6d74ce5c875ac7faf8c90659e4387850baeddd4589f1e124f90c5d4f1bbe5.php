<?php

/* :elevesViews:profileEleve.html.twig */
class __TwigTemplate_2f57b24f226afa91351448e3d40337e95d86ad898c696c33850020857792f832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":elevesViews:profileEleve.html.twig", 2);
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
        $__internal_007b0f15d98dae88b63a04500dfb378a26b4335ae83263d7b6baf06f3ed698e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007b0f15d98dae88b63a04500dfb378a26b4335ae83263d7b6baf06f3ed698e0->enter($__internal_007b0f15d98dae88b63a04500dfb378a26b4335ae83263d7b6baf06f3ed698e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:profileEleve.html.twig"));

        $__internal_e40b5b01b7fdb185a6cb7b3135507c4f9addb67b830a541061f613f773c35f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40b5b01b7fdb185a6cb7b3135507c4f9addb67b830a541061f613f773c35f88->enter($__internal_e40b5b01b7fdb185a6cb7b3135507c4f9addb67b830a541061f613f773c35f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":elevesViews:profileEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007b0f15d98dae88b63a04500dfb378a26b4335ae83263d7b6baf06f3ed698e0->leave($__internal_007b0f15d98dae88b63a04500dfb378a26b4335ae83263d7b6baf06f3ed698e0_prof);

        
        $__internal_e40b5b01b7fdb185a6cb7b3135507c4f9addb67b830a541061f613f773c35f88->leave($__internal_e40b5b01b7fdb185a6cb7b3135507c4f9addb67b830a541061f613f773c35f88_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca20409fbae8580cb6f84746df5ff3e8fdd7068c32e578402c9c9c5db9ee2a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca20409fbae8580cb6f84746df5ff3e8fdd7068c32e578402c9c9c5db9ee2a94->enter($__internal_ca20409fbae8580cb6f84746df5ff3e8fdd7068c32e578402c9c9c5db9ee2a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9ebfe3003c3092b15c478e3265e015e28b5b6387e749d8db984ce489a9c23e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ebfe3003c3092b15c478e3265e015e28b5b6387e749d8db984ce489a9c23e4->enter($__internal_b9ebfe3003c3092b15c478e3265e015e28b5b6387e749d8db984ce489a9c23e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 7
        if ($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>parent :</b>";
        // line 19
        if (($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "parent", array()), "prenom", array()), "html", null, true);
        }
        echo "</li>
\t\t<li><b>ecole :</b>";
        // line 20
        if (($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "ecole", array()), "ville", array()), "html", null, true);
        }
        echo "</li>
\t\t<li>
\t\t\t<b>Liste des Absences</b>
\t\t\t<ul>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "absences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["abs"]) {
            // line 25
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["abs"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["abs"], "commentaire", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des retard</b>
\t\t\t<ul>
\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "retards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ret"]) {
            // line 33
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ret"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ret"], "commentaire", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ret'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
";
        
        $__internal_b9ebfe3003c3092b15c478e3265e015e28b5b6387e749d8db984ce489a9c23e4->leave($__internal_b9ebfe3003c3092b15c478e3265e015e28b5b6387e749d8db984ce489a9c23e4_prof);

        
        $__internal_ca20409fbae8580cb6f84746df5ff3e8fdd7068c32e578402c9c9c5db9ee2a94->leave($__internal_ca20409fbae8580cb6f84746df5ff3e8fdd7068c32e578402c9c9c5db9ee2a94_prof);

    }

    public function getTemplateName()
    {
        return ":elevesViews:profileEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 35,  156 => 33,  152 => 32,  145 => 27,  134 => 25,  130 => 24,  119 => 20,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  57 => 7,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
<h1>Profile De {{eleve.nom}} {{eleve.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if eleve.photo %}{{ asset('uploads/photos/' ~ eleve.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{eleve.nom}}</li>
\t\t<li><b>prenom :</b>{{eleve.prenom}}</li>
\t\t<li><b>genre :</b>{{eleve.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{eleve.dateDeNaissance|date('Y-m-d')}} à {{eleve.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{eleve.adresse}}</li>
\t\t<li><b>code postal :</b>{{eleve.codePostal}}</li>
\t\t<li><b>telephone :</b>{{eleve.telephone}}</li>
\t\t<li><b>username :</b>{{eleve.username}}</li>
\t\t<li><b>email :</b>{{eleve.email}}</li>
\t\t<li><b>type :</b>{{eleve.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{eleve.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>parent :</b>{% if eleve.parent != null %}{{eleve.parent.nom}} {{eleve.parent.prenom}}{%endif%}</li>
\t\t<li><b>ecole :</b>{% if eleve.ecole != null %}{{eleve.ecole.nom}} {{eleve.ecole.ville}}{%endif%}</li>
\t\t<li>
\t\t\t<b>Liste des Absences</b>
\t\t\t<ul>
\t\t\t\t{% for abs in eleve.absences %}
\t\t\t\t\t<li>{{abs.date|date('Y-m-d H:i:s')}} {{abs.commentaire}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<b>Liste des retard</b>
\t\t\t<ul>
\t\t\t\t{% for ret in eleve.retards %}
\t\t\t\t\t<li>{{ret.date|date('Y-m-d H:i:s')}} {{ret.commentaire}}</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</li>
\t</ul>
{% endblock %}", ":elevesViews:profileEleve.html.twig", "C:\\wamp64\\www\\SCHOOL\\app/Resources\\views/elevesViews/profileEleve.html.twig");
    }
}
