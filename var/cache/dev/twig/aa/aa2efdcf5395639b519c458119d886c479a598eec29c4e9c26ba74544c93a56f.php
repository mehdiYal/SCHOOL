<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d8e67cd7a8baa436751b8b9cd5abfda77c6e4a99db4ffd9cdec90a8aad6078fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d261acb82f38954faec2468257c18b29db16e753e80ec8ca9f75490ce0c7514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d261acb82f38954faec2468257c18b29db16e753e80ec8ca9f75490ce0c7514->enter($__internal_3d261acb82f38954faec2468257c18b29db16e753e80ec8ca9f75490ce0c7514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_554987825869260e8b6ae109f6213785074b5efa9657bc19f21f9fbc079ed979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554987825869260e8b6ae109f6213785074b5efa9657bc19f21f9fbc079ed979->enter($__internal_554987825869260e8b6ae109f6213785074b5efa9657bc19f21f9fbc079ed979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3d261acb82f38954faec2468257c18b29db16e753e80ec8ca9f75490ce0c7514->leave($__internal_3d261acb82f38954faec2468257c18b29db16e753e80ec8ca9f75490ce0c7514_prof);

        
        $__internal_554987825869260e8b6ae109f6213785074b5efa9657bc19f21f9fbc079ed979->leave($__internal_554987825869260e8b6ae109f6213785074b5efa9657bc19f21f9fbc079ed979_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a1ac91513df02b2c20d955855897724337c3aa0e91d18f3a93ec1ff13611accc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ac91513df02b2c20d955855897724337c3aa0e91d18f3a93ec1ff13611accc->enter($__internal_a1ac91513df02b2c20d955855897724337c3aa0e91d18f3a93ec1ff13611accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_40fac7827ed77398500a869e66f7bc35c4916575dcdd242c59f3ec96d165c689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fac7827ed77398500a869e66f7bc35c4916575dcdd242c59f3ec96d165c689->enter($__internal_40fac7827ed77398500a869e66f7bc35c4916575dcdd242c59f3ec96d165c689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_40fac7827ed77398500a869e66f7bc35c4916575dcdd242c59f3ec96d165c689->leave($__internal_40fac7827ed77398500a869e66f7bc35c4916575dcdd242c59f3ec96d165c689_prof);

        
        $__internal_a1ac91513df02b2c20d955855897724337c3aa0e91d18f3a93ec1ff13611accc->leave($__internal_a1ac91513df02b2c20d955855897724337c3aa0e91d18f3a93ec1ff13611accc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7c024f6a458fa7d142951d7502a7ec5c7d153c4adfed6d0e6a09a399149bb197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c024f6a458fa7d142951d7502a7ec5c7d153c4adfed6d0e6a09a399149bb197->enter($__internal_7c024f6a458fa7d142951d7502a7ec5c7d153c4adfed6d0e6a09a399149bb197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_400a4ba625cd8447f4111bb495b08c6626fb74055885c916443efde6e5630e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400a4ba625cd8447f4111bb495b08c6626fb74055885c916443efde6e5630e8e->enter($__internal_400a4ba625cd8447f4111bb495b08c6626fb74055885c916443efde6e5630e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_400a4ba625cd8447f4111bb495b08c6626fb74055885c916443efde6e5630e8e->leave($__internal_400a4ba625cd8447f4111bb495b08c6626fb74055885c916443efde6e5630e8e_prof);

        
        $__internal_7c024f6a458fa7d142951d7502a7ec5c7d153c4adfed6d0e6a09a399149bb197->leave($__internal_7c024f6a458fa7d142951d7502a7ec5c7d153c4adfed6d0e6a09a399149bb197_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_89360b750d55e664f2c229cce9cb67f37c095197f4cf172f2c091ba087ddc4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89360b750d55e664f2c229cce9cb67f37c095197f4cf172f2c091ba087ddc4fe->enter($__internal_89360b750d55e664f2c229cce9cb67f37c095197f4cf172f2c091ba087ddc4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2e588a937b03655bd23a51f5491404283a457cc556c2e51caf349360a6135373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e588a937b03655bd23a51f5491404283a457cc556c2e51caf349360a6135373->enter($__internal_2e588a937b03655bd23a51f5491404283a457cc556c2e51caf349360a6135373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e588a937b03655bd23a51f5491404283a457cc556c2e51caf349360a6135373->leave($__internal_2e588a937b03655bd23a51f5491404283a457cc556c2e51caf349360a6135373_prof);

        
        $__internal_89360b750d55e664f2c229cce9cb67f37c095197f4cf172f2c091ba087ddc4fe->leave($__internal_89360b750d55e664f2c229cce9cb67f37c095197f4cf172f2c091ba087ddc4fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
