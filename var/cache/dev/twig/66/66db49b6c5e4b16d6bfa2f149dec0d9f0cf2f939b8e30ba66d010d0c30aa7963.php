<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_001498ca61b71f4a3d5bcc4bc2a929e46b20aee17d26563e61f91228d5ecea94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_0411b7736143cd81bbd91f594f4c02a220f748b4c838a2c447332692b3873117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0411b7736143cd81bbd91f594f4c02a220f748b4c838a2c447332692b3873117->enter($__internal_0411b7736143cd81bbd91f594f4c02a220f748b4c838a2c447332692b3873117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_97e6768f3ce9ff84a8ffcbd1828c036a5a9d30f9837d15dcffd3c05206d6dca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e6768f3ce9ff84a8ffcbd1828c036a5a9d30f9837d15dcffd3c05206d6dca9->enter($__internal_97e6768f3ce9ff84a8ffcbd1828c036a5a9d30f9837d15dcffd3c05206d6dca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0411b7736143cd81bbd91f594f4c02a220f748b4c838a2c447332692b3873117->leave($__internal_0411b7736143cd81bbd91f594f4c02a220f748b4c838a2c447332692b3873117_prof);

        
        $__internal_97e6768f3ce9ff84a8ffcbd1828c036a5a9d30f9837d15dcffd3c05206d6dca9->leave($__internal_97e6768f3ce9ff84a8ffcbd1828c036a5a9d30f9837d15dcffd3c05206d6dca9_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_867ce512fb74e0e59ba9e81198b9e31974f8e2ddde7605558aa0b7213b0d2757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867ce512fb74e0e59ba9e81198b9e31974f8e2ddde7605558aa0b7213b0d2757->enter($__internal_867ce512fb74e0e59ba9e81198b9e31974f8e2ddde7605558aa0b7213b0d2757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_48dbf1f85606da1998fffd95539cf643e082afd557751e263e4a964dcadf7a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dbf1f85606da1998fffd95539cf643e082afd557751e263e4a964dcadf7a9a->enter($__internal_48dbf1f85606da1998fffd95539cf643e082afd557751e263e4a964dcadf7a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            ";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            // line 11
            echo "        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<h3>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_48dbf1f85606da1998fffd95539cf643e082afd557751e263e4a964dcadf7a9a->leave($__internal_48dbf1f85606da1998fffd95539cf643e082afd557751e263e4a964dcadf7a9a_prof);

        
        $__internal_867ce512fb74e0e59ba9e81198b9e31974f8e2ddde7605558aa0b7213b0d2757->leave($__internal_867ce512fb74e0e59ba9e81198b9e31974f8e2ddde7605558aa0b7213b0d2757_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  93 => 21,  88 => 19,  85 => 18,  75 => 14,  71 => 13,  67 => 11,  65 => 10,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>{{ thread.subject }}</h2>

{% for message in thread.messages %}
    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
            {{ message.body }}
        </div>
    </div>
{% endfor %}

<h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

<form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "/Applications/MAMP/htdocs/Schoolium/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/thread.html.twig");
    }
}
