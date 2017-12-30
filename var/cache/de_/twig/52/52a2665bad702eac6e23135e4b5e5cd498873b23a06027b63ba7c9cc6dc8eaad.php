<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_d46cc0f09b23999ac8f9724a3e335ddd3a32dd649796a37987d8abcb9cd76305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba063c14f0f901f71b42ad6e61066882b1069af2cd2a8278499d7ca50e6aa476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba063c14f0f901f71b42ad6e61066882b1069af2cd2a8278499d7ca50e6aa476->enter($__internal_ba063c14f0f901f71b42ad6e61066882b1069af2cd2a8278499d7ca50e6aa476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $__internal_738ca07e779bc332dcf0fbb06446b86baaecb2dce569623ae43f49384d2523e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738ca07e779bc332dcf0fbb06446b86baaecb2dce569623ae43f49384d2523e3->enter($__internal_738ca07e779bc332dcf0fbb06446b86baaecb2dce569623ae43f49384d2523e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba063c14f0f901f71b42ad6e61066882b1069af2cd2a8278499d7ca50e6aa476->leave($__internal_ba063c14f0f901f71b42ad6e61066882b1069af2cd2a8278499d7ca50e6aa476_prof);

        
        $__internal_738ca07e779bc332dcf0fbb06446b86baaecb2dce569623ae43f49384d2523e3->leave($__internal_738ca07e779bc332dcf0fbb06446b86baaecb2dce569623ae43f49384d2523e3_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_37b3d78f46a33aab78381cfd6360fdd8de7b1c9ff59cd5d45e924486444d608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b3d78f46a33aab78381cfd6360fdd8de7b1c9ff59cd5d45e924486444d608b->enter($__internal_37b3d78f46a33aab78381cfd6360fdd8de7b1c9ff59cd5d45e924486444d608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_6d6d259f85ef273b9439c2663ee4f0123b6ed6862ab43f205136e6f6376af5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6d259f85ef273b9439c2663ee4f0123b6ed6862ab43f205136e6f6376af5e4->enter($__internal_6d6d259f85ef273b9439c2663ee4f0123b6ed6862ab43f205136e6f6376af5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_6d6d259f85ef273b9439c2663ee4f0123b6ed6862ab43f205136e6f6376af5e4->leave($__internal_6d6d259f85ef273b9439c2663ee4f0123b6ed6862ab43f205136e6f6376af5e4_prof);

        
        $__internal_37b3d78f46a33aab78381cfd6360fdd8de7b1c9ff59cd5d45e924486444d608b->leave($__internal_37b3d78f46a33aab78381cfd6360fdd8de7b1c9ff59cd5d45e924486444d608b_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:deleted.html.twig", "C:\\wamp64\\www\\SCHOOL\\vendor\\friendsofsymfony\\message-bundle\\FOS\\MessageBundle/Resources/views/Message/deleted.html.twig");
    }
}
