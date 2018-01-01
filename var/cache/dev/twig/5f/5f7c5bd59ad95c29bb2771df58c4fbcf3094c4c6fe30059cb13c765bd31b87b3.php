<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_7d90958719c19490f75d22d4b24d8c03d9a834c02ddc8b2cd1cbdfdca49d3741 extends Twig_Template
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
        $__internal_2c3965d79d2cb75c5ad66818afe07ed07f0c9bae412f9de3602f1092ae62098e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3965d79d2cb75c5ad66818afe07ed07f0c9bae412f9de3602f1092ae62098e->enter($__internal_2c3965d79d2cb75c5ad66818afe07ed07f0c9bae412f9de3602f1092ae62098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $__internal_a21c0db5a890bc099b9db841c03344fd904a516e217a6c9d829b1eb7ee3378b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21c0db5a890bc099b9db841c03344fd904a516e217a6c9d829b1eb7ee3378b7->enter($__internal_a21c0db5a890bc099b9db841c03344fd904a516e217a6c9d829b1eb7ee3378b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3965d79d2cb75c5ad66818afe07ed07f0c9bae412f9de3602f1092ae62098e->leave($__internal_2c3965d79d2cb75c5ad66818afe07ed07f0c9bae412f9de3602f1092ae62098e_prof);

        
        $__internal_a21c0db5a890bc099b9db841c03344fd904a516e217a6c9d829b1eb7ee3378b7->leave($__internal_a21c0db5a890bc099b9db841c03344fd904a516e217a6c9d829b1eb7ee3378b7_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_1a6fe797e8c0f66e6b710592faa513445440a9fa2edbbcbe67e21e027b47f852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6fe797e8c0f66e6b710592faa513445440a9fa2edbbcbe67e21e027b47f852->enter($__internal_1a6fe797e8c0f66e6b710592faa513445440a9fa2edbbcbe67e21e027b47f852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_6466eed95d95f7c89753c54a138fcb1cbbe06161706ec11f2a1cc62915735ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6466eed95d95f7c89753c54a138fcb1cbbe06161706ec11f2a1cc62915735ad0->enter($__internal_6466eed95d95f7c89753c54a138fcb1cbbe06161706ec11f2a1cc62915735ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_6466eed95d95f7c89753c54a138fcb1cbbe06161706ec11f2a1cc62915735ad0->leave($__internal_6466eed95d95f7c89753c54a138fcb1cbbe06161706ec11f2a1cc62915735ad0_prof);

        
        $__internal_1a6fe797e8c0f66e6b710592faa513445440a9fa2edbbcbe67e21e027b47f852->leave($__internal_1a6fe797e8c0f66e6b710592faa513445440a9fa2edbbcbe67e21e027b47f852_prof);

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
", "FOSMessageBundle:Message:deleted.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/deleted.html.twig");
    }
}
