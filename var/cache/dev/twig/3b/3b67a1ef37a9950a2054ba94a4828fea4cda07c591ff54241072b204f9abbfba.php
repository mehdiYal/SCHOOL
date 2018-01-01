<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6eecad18024299b35cad6cc6e11d98d6520580045a931185faece6a104404067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b13ece6c4bc65476301ea8b1933ff99ee207937eeec55a78a0bd74c8bfc3f0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13ece6c4bc65476301ea8b1933ff99ee207937eeec55a78a0bd74c8bfc3f0f8->enter($__internal_b13ece6c4bc65476301ea8b1933ff99ee207937eeec55a78a0bd74c8bfc3f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_68a251163a4f0bd4942cd8be57df10850953d54a8141cbe440cc104953ed62f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a251163a4f0bd4942cd8be57df10850953d54a8141cbe440cc104953ed62f6->enter($__internal_68a251163a4f0bd4942cd8be57df10850953d54a8141cbe440cc104953ed62f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13ece6c4bc65476301ea8b1933ff99ee207937eeec55a78a0bd74c8bfc3f0f8->leave($__internal_b13ece6c4bc65476301ea8b1933ff99ee207937eeec55a78a0bd74c8bfc3f0f8_prof);

        
        $__internal_68a251163a4f0bd4942cd8be57df10850953d54a8141cbe440cc104953ed62f6->leave($__internal_68a251163a4f0bd4942cd8be57df10850953d54a8141cbe440cc104953ed62f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82338693a75e6feb08682e299b4dc834187796d9ad76b6baf527032ad3811a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82338693a75e6feb08682e299b4dc834187796d9ad76b6baf527032ad3811a60->enter($__internal_82338693a75e6feb08682e299b4dc834187796d9ad76b6baf527032ad3811a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5b4929d6d1f297c81bbe5a2e9b0462da4b415ae2211c2b23c02f3fe30c1936d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b4929d6d1f297c81bbe5a2e9b0462da4b415ae2211c2b23c02f3fe30c1936d->enter($__internal_a5b4929d6d1f297c81bbe5a2e9b0462da4b415ae2211c2b23c02f3fe30c1936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a5b4929d6d1f297c81bbe5a2e9b0462da4b415ae2211c2b23c02f3fe30c1936d->leave($__internal_a5b4929d6d1f297c81bbe5a2e9b0462da4b415ae2211c2b23c02f3fe30c1936d_prof);

        
        $__internal_82338693a75e6feb08682e299b4dc834187796d9ad76b6baf527032ad3811a60->leave($__internal_82338693a75e6feb08682e299b4dc834187796d9ad76b6baf527032ad3811a60_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39fa39938d47ea8f233c5be15d398d6e5b12c314a0fe663a66b7c9f1b844e8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fa39938d47ea8f233c5be15d398d6e5b12c314a0fe663a66b7c9f1b844e8fe->enter($__internal_39fa39938d47ea8f233c5be15d398d6e5b12c314a0fe663a66b7c9f1b844e8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1dc1d5e08bdc03685891dd9f03a401068aaeafd3ba830ea7e056c0cde0d48919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc1d5e08bdc03685891dd9f03a401068aaeafd3ba830ea7e056c0cde0d48919->enter($__internal_1dc1d5e08bdc03685891dd9f03a401068aaeafd3ba830ea7e056c0cde0d48919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        
        $__internal_1dc1d5e08bdc03685891dd9f03a401068aaeafd3ba830ea7e056c0cde0d48919->leave($__internal_1dc1d5e08bdc03685891dd9f03a401068aaeafd3ba830ea7e056c0cde0d48919_prof);

        
        $__internal_39fa39938d47ea8f233c5be15d398d6e5b12c314a0fe663a66b7c9f1b844e8fe->leave($__internal_39fa39938d47ea8f233c5be15d398d6e5b12c314a0fe663a66b7c9f1b844e8fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 15,  88 => 14,  85 => 13,  79 => 12,  70 => 9,  65 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
            {% block fos_user_content %}
            {% endblock fos_user_content %}
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
