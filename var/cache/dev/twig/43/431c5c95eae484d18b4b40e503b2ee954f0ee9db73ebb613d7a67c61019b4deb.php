<?php

/* :adminsViews:superAdmin.html.twig */
class __TwigTemplate_33283760798a3dad638aa7d46b24d69193f4bae07ec299ff08047b736e1817b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df42dbc8152a7ee53b012db8a8332703e2cd36612604e25b8bc4c7b88ede4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df42dbc8152a7ee53b012db8a8332703e2cd36612604e25b8bc4c7b88ede4c9->enter($__internal_9df42dbc8152a7ee53b012db8a8332703e2cd36612604e25b8bc4c7b88ede4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:superAdmin.html.twig"));

        $__internal_8d1f1df0153b47a87b6b3c969ecad4db291ea6d0d73fea23db534f25649cfe3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1f1df0153b47a87b6b3c969ecad4db291ea6d0d73fea23db534f25649cfe3e->enter($__internal_8d1f1df0153b47a87b6b3c969ecad4db291ea6d0d73fea23db534f25649cfe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":adminsViews:superAdmin.html.twig"));

        // line 1
        echo "<<<<<<< HEAD
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown1"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAdmin");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link1"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAdmins");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link2"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown5"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSchool");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link9"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSchools");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link10"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown6"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiere");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link14"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMatieres");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link15"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown7"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAnnee");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link17"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAnnees");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link18"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
=======
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown1"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAdmin");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link1"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAdmins");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link2"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown5"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSchool");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link9"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSchools");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link10"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown6"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiere");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link14"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMatieres");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link15"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown7"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAnnee");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link17"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAnnees");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link18"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
</li>";
        
        $__internal_9df42dbc8152a7ee53b012db8a8332703e2cd36612604e25b8bc4c7b88ede4c9->leave($__internal_9df42dbc8152a7ee53b012db8a8332703e2cd36612604e25b8bc4c7b88ede4c9_prof);

        
        $__internal_8d1f1df0153b47a87b6b3c969ecad4db291ea6d0d73fea23db534f25649cfe3e->leave($__internal_8d1f1df0153b47a87b6b3c969ecad4db291ea6d0d73fea23db534f25649cfe3e_prof);

    }

    public function getTemplateName()
    {
        return ":adminsViews:superAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  174 => 54,  169 => 52,  160 => 48,  154 => 47,  149 => 45,  140 => 41,  134 => 40,  129 => 38,  120 => 34,  114 => 33,  109 => 31,  100 => 27,  94 => 26,  89 => 24,  80 => 20,  74 => 19,  69 => 17,  60 => 13,  54 => 12,  49 => 10,  40 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<<<<<<< HEAD
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown1'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addAdmin') }}\">{{'navbar.link.link1'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listAdmins') }}\">{{'navbar.link.link2'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown5'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addSchool') }}\">{{'navbar.link.link9'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listSchools') }}\">{{'navbar.link.link10'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown6'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addMatiere') }}\">{{'navbar.link.link14'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listMatieres') }}\">{{'navbar.link.link15'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown7'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addAnnee') }}\">{{'navbar.link.link17'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listAnnees') }}\">{{'navbar.link.link18'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
=======
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown1'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addAdmin') }}\">{{'navbar.link.link1'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listAdmins') }}\">{{'navbar.link.link2'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown5'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addSchool') }}\">{{'navbar.link.link9'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listSchools') }}\">{{'navbar.link.link10'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown6'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addMatiere') }}\">{{'navbar.link.link14'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listMatieres') }}\">{{'navbar.link.link15'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown7'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addAnnee') }}\">{{'navbar.link.link17'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listAnnees') }}\">{{'navbar.link.link18'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
</li>", ":adminsViews:superAdmin.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/adminsViews/superAdmin.html.twig");
    }
}
