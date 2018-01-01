<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5f76a267c3a2c046f59e6a3b62dc9568eaae5078975ad61fc7add28fdca7c9cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e40c60f30251ec50135ab53b501f0db2b2c0e39e6639a8b257c5463d8c0e49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e40c60f30251ec50135ab53b501f0db2b2c0e39e6639a8b257c5463d8c0e49a->enter($__internal_7e40c60f30251ec50135ab53b501f0db2b2c0e39e6639a8b257c5463d8c0e49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_28629502c83dfd44a3592c2a4226b800fec797161d2aaeea41558a61ed1f2389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28629502c83dfd44a3592c2a4226b800fec797161d2aaeea41558a61ed1f2389->enter($__internal_28629502c83dfd44a3592c2a4226b800fec797161d2aaeea41558a61ed1f2389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e40c60f30251ec50135ab53b501f0db2b2c0e39e6639a8b257c5463d8c0e49a->leave($__internal_7e40c60f30251ec50135ab53b501f0db2b2c0e39e6639a8b257c5463d8c0e49a_prof);

        
        $__internal_28629502c83dfd44a3592c2a4226b800fec797161d2aaeea41558a61ed1f2389->leave($__internal_28629502c83dfd44a3592c2a4226b800fec797161d2aaeea41558a61ed1f2389_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91e1c1bcc7319a8d9fdf959f9ff8da87b6f58aaab06e087486a3fa9784478dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e1c1bcc7319a8d9fdf959f9ff8da87b6f58aaab06e087486a3fa9784478dd6->enter($__internal_91e1c1bcc7319a8d9fdf959f9ff8da87b6f58aaab06e087486a3fa9784478dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b37f1efcf5728073d6571fc0ff14c6227abd908f667de96543081abdf34208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b37f1efcf5728073d6571fc0ff14c6227abd908f667de96543081abdf34208c->enter($__internal_9b37f1efcf5728073d6571fc0ff14c6227abd908f667de96543081abdf34208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9b37f1efcf5728073d6571fc0ff14c6227abd908f667de96543081abdf34208c->leave($__internal_9b37f1efcf5728073d6571fc0ff14c6227abd908f667de96543081abdf34208c_prof);

        
        $__internal_91e1c1bcc7319a8d9fdf959f9ff8da87b6f58aaab06e087486a3fa9784478dd6->leave($__internal_91e1c1bcc7319a8d9fdf959f9ff8da87b6f58aaab06e087486a3fa9784478dd6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
