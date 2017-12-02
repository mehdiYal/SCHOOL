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
        $__internal_26c55953268c42aee2eeb24ac06bc55306c763ab513550addd225fff9effcae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c55953268c42aee2eeb24ac06bc55306c763ab513550addd225fff9effcae0->enter($__internal_26c55953268c42aee2eeb24ac06bc55306c763ab513550addd225fff9effcae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_96226ce5edaf0c7260603b5b3de6d93f4bf938ff1c0022d1712df71d781ce94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96226ce5edaf0c7260603b5b3de6d93f4bf938ff1c0022d1712df71d781ce94e->enter($__internal_96226ce5edaf0c7260603b5b3de6d93f4bf938ff1c0022d1712df71d781ce94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_26c55953268c42aee2eeb24ac06bc55306c763ab513550addd225fff9effcae0->leave($__internal_26c55953268c42aee2eeb24ac06bc55306c763ab513550addd225fff9effcae0_prof);

        
        $__internal_96226ce5edaf0c7260603b5b3de6d93f4bf938ff1c0022d1712df71d781ce94e->leave($__internal_96226ce5edaf0c7260603b5b3de6d93f4bf938ff1c0022d1712df71d781ce94e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e2827efdca7a097e156bd741f5c3b647fc1e0c96fb6187fcffcee27c225e95a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2827efdca7a097e156bd741f5c3b647fc1e0c96fb6187fcffcee27c225e95a3->enter($__internal_e2827efdca7a097e156bd741f5c3b647fc1e0c96fb6187fcffcee27c225e95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bcf43f1459e82dec05fba7a925c4aaaa2f4c982b6299655b4a1fd5ebaabb9a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf43f1459e82dec05fba7a925c4aaaa2f4c982b6299655b4a1fd5ebaabb9a50->enter($__internal_bcf43f1459e82dec05fba7a925c4aaaa2f4c982b6299655b4a1fd5ebaabb9a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_bcf43f1459e82dec05fba7a925c4aaaa2f4c982b6299655b4a1fd5ebaabb9a50->leave($__internal_bcf43f1459e82dec05fba7a925c4aaaa2f4c982b6299655b4a1fd5ebaabb9a50_prof);

        
        $__internal_e2827efdca7a097e156bd741f5c3b647fc1e0c96fb6187fcffcee27c225e95a3->leave($__internal_e2827efdca7a097e156bd741f5c3b647fc1e0c96fb6187fcffcee27c225e95a3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5540781a7fdef9d50986119ea12dddc4073aa621d5f46eed969df66e3b9f1f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5540781a7fdef9d50986119ea12dddc4073aa621d5f46eed969df66e3b9f1f3d->enter($__internal_5540781a7fdef9d50986119ea12dddc4073aa621d5f46eed969df66e3b9f1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_075e682acf677fe48043984c3caf9fe4bff114ae80105203ed9f1165a6d49a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075e682acf677fe48043984c3caf9fe4bff114ae80105203ed9f1165a6d49a02->enter($__internal_075e682acf677fe48043984c3caf9fe4bff114ae80105203ed9f1165a6d49a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_075e682acf677fe48043984c3caf9fe4bff114ae80105203ed9f1165a6d49a02->leave($__internal_075e682acf677fe48043984c3caf9fe4bff114ae80105203ed9f1165a6d49a02_prof);

        
        $__internal_5540781a7fdef9d50986119ea12dddc4073aa621d5f46eed969df66e3b9f1f3d->leave($__internal_5540781a7fdef9d50986119ea12dddc4073aa621d5f46eed969df66e3b9f1f3d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_532673dd11195c63d72ed8caf61dced9294dac38ea0cd84a0ca31912f1789d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532673dd11195c63d72ed8caf61dced9294dac38ea0cd84a0ca31912f1789d47->enter($__internal_532673dd11195c63d72ed8caf61dced9294dac38ea0cd84a0ca31912f1789d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_236adf7a020b5e40373e4348593f72d5a4dc601624f1fc72ad924373a67cdaca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236adf7a020b5e40373e4348593f72d5a4dc601624f1fc72ad924373a67cdaca->enter($__internal_236adf7a020b5e40373e4348593f72d5a4dc601624f1fc72ad924373a67cdaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_236adf7a020b5e40373e4348593f72d5a4dc601624f1fc72ad924373a67cdaca->leave($__internal_236adf7a020b5e40373e4348593f72d5a4dc601624f1fc72ad924373a67cdaca_prof);

        
        $__internal_532673dd11195c63d72ed8caf61dced9294dac38ea0cd84a0ca31912f1789d47->leave($__internal_532673dd11195c63d72ed8caf61dced9294dac38ea0cd84a0ca31912f1789d47_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
