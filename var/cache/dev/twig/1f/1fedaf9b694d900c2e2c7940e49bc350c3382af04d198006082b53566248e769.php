<?php

/* :enseignantsViews:profileEnseignant.html.twig */
class __TwigTemplate_cc7f56a8c32ec00c3c0636f6ba220a853ff3f49871d06f323674adaec56255c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":enseignantsViews:profileEnseignant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_635d55554afc666d1c5f3d5516db3841ba4472ffef53b95a93d10eda551ff9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635d55554afc666d1c5f3d5516db3841ba4472ffef53b95a93d10eda551ff9f1->enter($__internal_635d55554afc666d1c5f3d5516db3841ba4472ffef53b95a93d10eda551ff9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:profileEnseignant.html.twig"));

        $__internal_1c6625d0d765b772624c5298dc334ce6bcb7f74dfcdde597e84d4e8ae50416bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6625d0d765b772624c5298dc334ce6bcb7f74dfcdde597e84d4e8ae50416bf->enter($__internal_1c6625d0d765b772624c5298dc334ce6bcb7f74dfcdde597e84d4e8ae50416bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:profileEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_635d55554afc666d1c5f3d5516db3841ba4472ffef53b95a93d10eda551ff9f1->leave($__internal_635d55554afc666d1c5f3d5516db3841ba4472ffef53b95a93d10eda551ff9f1_prof);

        
        $__internal_1c6625d0d765b772624c5298dc334ce6bcb7f74dfcdde597e84d4e8ae50416bf->leave($__internal_1c6625d0d765b772624c5298dc334ce6bcb7f74dfcdde597e84d4e8ae50416bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8efa72dbd03e4f5e93f5675c68a3e6750718c4d070146c3123d49c0e87cc6555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efa72dbd03e4f5e93f5675c68a3e6750718c4d070146c3123d49c0e87cc6555->enter($__internal_8efa72dbd03e4f5e93f5675c68a3e6750718c4d070146c3123d49c0e87cc6555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_500488d233b0ed53ff0b77dd5ace7c8f45b3fe38032528213d35cb13ad230f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500488d233b0ed53ff0b77dd5ace7c8f45b3fe38032528213d35cb13ad230f9e->enter($__internal_500488d233b0ed53ff0b77dd5ace7c8f45b3fe38032528213d35cb13ad230f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profile De ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"";
        // line 6
        if ($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "photo", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "photo", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/avatar.png"), "html", null, true);
        }
        echo "\" alt=\"\"></li>
\t\t<li><b>nom :</b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>prenom :</b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t<li><b>genre :</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "genre", array()), "html", null, true);
        echo "</li>
\t\t<li><b>date et lieu de naissance :</b>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "lieuDeNaissance", array()), "html", null, true);
        echo "</li>
\t\t<li><b>adresse :</b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t<li><b>code postal :</b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "codePostal", array()), "html", null, true);
        echo "</li>
\t\t<li><b>telephone :</b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t<li><b>username :</b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "username", array()), "html", null, true);
        echo "</li>
\t\t<li><b>email :</b>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "email", array()), "html", null, true);
        echo "</li>
\t\t<li><b>type :</b>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "typeUser", array())), "html", null, true);
        echo "</li>
\t\t<li><b>derniere connexion :</b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "lastLogin", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t<li><b>Ecole :</b>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ecole", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "ecole", array()), "ville", array())), "html", null, true);
        echo "</li>
\t</ul>
";
        
        $__internal_500488d233b0ed53ff0b77dd5ace7c8f45b3fe38032528213d35cb13ad230f9e->leave($__internal_500488d233b0ed53ff0b77dd5ace7c8f45b3fe38032528213d35cb13ad230f9e_prof);

        
        $__internal_8efa72dbd03e4f5e93f5675c68a3e6750718c4d070146c3123d49c0e87cc6555->leave($__internal_8efa72dbd03e4f5e93f5675c68a3e6750718c4d070146c3123d49c0e87cc6555_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:profileEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<h1>Profile De {{enseignant.nom}} {{enseignant.prenom}}</h1>
\t<ul>
\t\t<li><b>photo :</b><img src=\"{% if enseignant.photo %}{{ asset('uploads/photos/' ~ enseignant.photo) }}{% else %}{{ asset('uploads/photos/avatar.png') }}{% endif %}\" alt=\"\"></li>
\t\t<li><b>nom :</b>{{enseignant.nom}}</li>
\t\t<li><b>prenom :</b>{{enseignant.prenom}}</li>
\t\t<li><b>genre :</b>{{enseignant.genre}}</li>
\t\t<li><b>date et lieu de naissance :</b>{{enseignant.dateDeNaissance|date('Y-m-d')}} à {{enseignant.lieuDeNaissance}}</li>
\t\t<li><b>adresse :</b>{{enseignant.adresse}}</li>
\t\t<li><b>code postal :</b>{{enseignant.codePostal}}</li>
\t\t<li><b>telephone :</b>{{enseignant.telephone}}</li>
\t\t<li><b>username :</b>{{enseignant.username}}</li>
\t\t<li><b>email :</b>{{enseignant.email}}</li>
\t\t<li><b>type :</b>{{enseignant.typeUser|upper}}</li>
\t\t<li><b>derniere connexion :</b>{{enseignant.lastLogin|date('Y-m-d')}}</li>
\t\t<li><b>Ecole :</b>{{enseignant.ecole.nom|upper}} {{enseignant.ecole.ville|upper}}</li>
\t</ul>
{% endblock %}", ":enseignantsViews:profileEnseignant.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/enseignantsViews/profileEnseignant.html.twig");
    }
}
