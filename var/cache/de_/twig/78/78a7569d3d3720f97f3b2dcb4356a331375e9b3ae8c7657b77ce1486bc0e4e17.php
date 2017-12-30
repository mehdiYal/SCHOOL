<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_b13718f6cf6902870f41e850f47665d0ebb35272f86f646b049413a8df497f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a97e321a7cef705e1511579d339c41c1bad700ab070fb7a380714f3a0aa83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a97e321a7cef705e1511579d339c41c1bad700ab070fb7a380714f3a0aa83e->enter($__internal_f7a97e321a7cef705e1511579d339c41c1bad700ab070fb7a380714f3a0aa83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_b562f65031216fc96befd4f7e550bbd04bf67bde5d6f59339e409500a829ae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b562f65031216fc96befd4f7e550bbd04bf67bde5d6f59339e409500a829ae74->enter($__internal_b562f65031216fc96befd4f7e550bbd04bf67bde5d6f59339e409500a829ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>
    </head>

    <body>

        <h1>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</h1>

        <ul>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
        </ul>

        ";
        // line 18
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 19
        echo "
    </body>
</html>
";
        
        $__internal_f7a97e321a7cef705e1511579d339c41c1bad700ab070fb7a380714f3a0aa83e->leave($__internal_f7a97e321a7cef705e1511579d339c41c1bad700ab070fb7a380714f3a0aa83e_prof);

        
        $__internal_b562f65031216fc96befd4f7e550bbd04bf67bde5d6f59339e409500a829ae74->leave($__internal_b562f65031216fc96befd4f7e550bbd04bf67bde5d6f59339e409500a829ae74_prof);

    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_059067df69699f2f2a3d258237517ac2d0bf3beff4c43502effcfaca2172ae14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059067df69699f2f2a3d258237517ac2d0bf3beff4c43502effcfaca2172ae14->enter($__internal_059067df69699f2f2a3d258237517ac2d0bf3beff4c43502effcfaca2172ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_bdb33cee5ca0033fe2dc1797fa65ef0792c2c18156fffea41cf07e867ed7b6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb33cee5ca0033fe2dc1797fa65ef0792c2c18156fffea41cf07e867ed7b6f4->enter($__internal_bdb33cee5ca0033fe2dc1797fa65ef0792c2c18156fffea41cf07e867ed7b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_bdb33cee5ca0033fe2dc1797fa65ef0792c2c18156fffea41cf07e867ed7b6f4->leave($__internal_bdb33cee5ca0033fe2dc1797fa65ef0792c2c18156fffea41cf07e867ed7b6f4_prof);

        
        $__internal_059067df69699f2f2a3d258237517ac2d0bf3beff4c43502effcfaca2172ae14->leave($__internal_059067df69699f2f2a3d258237517ac2d0bf3beff4c43502effcfaca2172ae14_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  71 => 19,  69 => 18,  61 => 15,  55 => 14,  49 => 13,  43 => 10,  35 => 5,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\" />
        <title>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</title>
    </head>

    <body>

        <h1>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1>

        <ul>
            <li><a href=\"{{ url('fos_message_inbox') }}\">{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_sent') }}\">{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_deleted') }}\">{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a></li>
        </ul>

        {% block fos_message_content %}{% endblock %}

    </body>
</html>
", "FOSMessageBundle::layout.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/layout.html.twig");
    }
}
