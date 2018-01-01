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
        $__internal_b7c47c0989544e7ab65c1edc2a55751fddd596cec8b765c3f9732416ea8900a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c47c0989544e7ab65c1edc2a55751fddd596cec8b765c3f9732416ea8900a8->enter($__internal_b7c47c0989544e7ab65c1edc2a55751fddd596cec8b765c3f9732416ea8900a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_8095c0835cf61f46d015fb2a391d7cdd084f56654e9f916bcf894471e40bdbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8095c0835cf61f46d015fb2a391d7cdd084f56654e9f916bcf894471e40bdbc5->enter($__internal_8095c0835cf61f46d015fb2a391d7cdd084f56654e9f916bcf894471e40bdbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

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
        
        $__internal_b7c47c0989544e7ab65c1edc2a55751fddd596cec8b765c3f9732416ea8900a8->leave($__internal_b7c47c0989544e7ab65c1edc2a55751fddd596cec8b765c3f9732416ea8900a8_prof);

        
        $__internal_8095c0835cf61f46d015fb2a391d7cdd084f56654e9f916bcf894471e40bdbc5->leave($__internal_8095c0835cf61f46d015fb2a391d7cdd084f56654e9f916bcf894471e40bdbc5_prof);

    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_2530a47ae53ad815061f4ddd538425bc7a5f15c06b667a92c32a49a79a5751da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2530a47ae53ad815061f4ddd538425bc7a5f15c06b667a92c32a49a79a5751da->enter($__internal_2530a47ae53ad815061f4ddd538425bc7a5f15c06b667a92c32a49a79a5751da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_983813c87a30ca76b574238dc4cbd1033d0216a63a1e71f59c1679a1ffb53437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983813c87a30ca76b574238dc4cbd1033d0216a63a1e71f59c1679a1ffb53437->enter($__internal_983813c87a30ca76b574238dc4cbd1033d0216a63a1e71f59c1679a1ffb53437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_983813c87a30ca76b574238dc4cbd1033d0216a63a1e71f59c1679a1ffb53437->leave($__internal_983813c87a30ca76b574238dc4cbd1033d0216a63a1e71f59c1679a1ffb53437_prof);

        
        $__internal_2530a47ae53ad815061f4ddd538425bc7a5f15c06b667a92c32a49a79a5751da->leave($__internal_2530a47ae53ad815061f4ddd538425bc7a5f15c06b667a92c32a49a79a5751da_prof);

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
