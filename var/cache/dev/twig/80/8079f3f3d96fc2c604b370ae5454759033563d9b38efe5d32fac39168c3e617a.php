<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_e284ca3890028ef2e1cd793f8eaaaca88a331c986bd537c74ae60bdf9dea6711 extends Twig_Template
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
        $__internal_3fe539199d674ae76d3abe2e59a097f222ceed7f84b79e291023dc4bcce7234d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe539199d674ae76d3abe2e59a097f222ceed7f84b79e291023dc4bcce7234d->enter($__internal_3fe539199d674ae76d3abe2e59a097f222ceed7f84b79e291023dc4bcce7234d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_6bf03bdcbd48ae0c3d44103accbe593e7215fc2e0bf8df4f46a4986be1f02496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf03bdcbd48ae0c3d44103accbe593e7215fc2e0bf8df4f46a4986be1f02496->enter($__internal_6bf03bdcbd48ae0c3d44103accbe593e7215fc2e0bf8df4f46a4986be1f02496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "<<<<<<< HEAD

=======

>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
  <li class=\"\"><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_3fe539199d674ae76d3abe2e59a097f222ceed7f84b79e291023dc4bcce7234d->leave($__internal_3fe539199d674ae76d3abe2e59a097f222ceed7f84b79e291023dc4bcce7234d_prof);

        
        $__internal_6bf03bdcbd48ae0c3d44103accbe593e7215fc2e0bf8df4f46a4986be1f02496->leave($__internal_6bf03bdcbd48ae0c3d44103accbe593e7215fc2e0bf8df4f46a4986be1f02496_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  25 => 1,);
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

=======

>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/parentsViews/parent.html.twig");
    }
}
