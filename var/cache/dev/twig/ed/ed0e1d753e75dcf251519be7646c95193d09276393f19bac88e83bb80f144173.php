<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_9c40365becf8844bb9f307a1ddf90fa2db57e0443a2d9071385efc84a3df4fb3 extends Twig_Template
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
        $__internal_899436c2f3d931046d04d59a4199c98b095046c112508abc55dc7067848e1c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899436c2f3d931046d04d59a4199c98b095046c112508abc55dc7067848e1c80->enter($__internal_899436c2f3d931046d04d59a4199c98b095046c112508abc55dc7067848e1c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_21627d2539c4c6419e1786f8adcdaee0a53627cd10f167b6503c2170a985e96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21627d2539c4c6419e1786f8adcdaee0a53627cd10f167b6503c2170a985e96d->enter($__internal_21627d2539c4c6419e1786f8adcdaee0a53627cd10f167b6503c2170a985e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

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
        
        $__internal_899436c2f3d931046d04d59a4199c98b095046c112508abc55dc7067848e1c80->leave($__internal_899436c2f3d931046d04d59a4199c98b095046c112508abc55dc7067848e1c80_prof);

        
        $__internal_21627d2539c4c6419e1786f8adcdaee0a53627cd10f167b6503c2170a985e96d->leave($__internal_21627d2539c4c6419e1786f8adcdaee0a53627cd10f167b6503c2170a985e96d_prof);

    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_9bb69de7949cca27c76e0ba84732a89b779c8d8f477d7fd95549fc0219d8f436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb69de7949cca27c76e0ba84732a89b779c8d8f477d7fd95549fc0219d8f436->enter($__internal_9bb69de7949cca27c76e0ba84732a89b779c8d8f477d7fd95549fc0219d8f436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_0644e0fb17b7e56d9df37819915097316432f41b3c0fa9dd4ac115fd6f8b712b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0644e0fb17b7e56d9df37819915097316432f41b3c0fa9dd4ac115fd6f8b712b->enter($__internal_0644e0fb17b7e56d9df37819915097316432f41b3c0fa9dd4ac115fd6f8b712b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_0644e0fb17b7e56d9df37819915097316432f41b3c0fa9dd4ac115fd6f8b712b->leave($__internal_0644e0fb17b7e56d9df37819915097316432f41b3c0fa9dd4ac115fd6f8b712b_prof);

        
        $__internal_9bb69de7949cca27c76e0ba84732a89b779c8d8f477d7fd95549fc0219d8f436->leave($__internal_9bb69de7949cca27c76e0ba84732a89b779c8d8f477d7fd95549fc0219d8f436_prof);

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
", "FOSMessageBundle::layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/layout.html.twig");
    }
}
