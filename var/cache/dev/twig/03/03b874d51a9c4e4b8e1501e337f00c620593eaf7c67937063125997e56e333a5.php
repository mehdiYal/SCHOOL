<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4f30a614d8060f026ee47cd2e3cd2f20366100a3f3051b5bfb88a1aae519092a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f424e67772c40dd46a91cd16996734e2f6c9851bc6412bfa0eeebec605fbb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f424e67772c40dd46a91cd16996734e2f6c9851bc6412bfa0eeebec605fbb4f->enter($__internal_7f424e67772c40dd46a91cd16996734e2f6c9851bc6412bfa0eeebec605fbb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b930047a94623887fa3c671f8b247471c2647921411b4c025c7f39acb4f93312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b930047a94623887fa3c671f8b247471c2647921411b4c025c7f39acb4f93312->enter($__internal_b930047a94623887fa3c671f8b247471c2647921411b4c025c7f39acb4f93312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f424e67772c40dd46a91cd16996734e2f6c9851bc6412bfa0eeebec605fbb4f->leave($__internal_7f424e67772c40dd46a91cd16996734e2f6c9851bc6412bfa0eeebec605fbb4f_prof);

        
        $__internal_b930047a94623887fa3c671f8b247471c2647921411b4c025c7f39acb4f93312->leave($__internal_b930047a94623887fa3c671f8b247471c2647921411b4c025c7f39acb4f93312_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_065dce827fccfefe60a6ac7fb32c82ce8e3e8e4ce6ff78da5ffa78e3b5f6d2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065dce827fccfefe60a6ac7fb32c82ce8e3e8e4ce6ff78da5ffa78e3b5f6d2b7->enter($__internal_065dce827fccfefe60a6ac7fb32c82ce8e3e8e4ce6ff78da5ffa78e3b5f6d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f089f16a2a0fa5ee44ce3aeebdb26aa991d528ba564ec99375d20091d6c30ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f089f16a2a0fa5ee44ce3aeebdb26aa991d528ba564ec99375d20091d6c30ab->enter($__internal_4f089f16a2a0fa5ee44ce3aeebdb26aa991d528ba564ec99375d20091d6c30ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f089f16a2a0fa5ee44ce3aeebdb26aa991d528ba564ec99375d20091d6c30ab->leave($__internal_4f089f16a2a0fa5ee44ce3aeebdb26aa991d528ba564ec99375d20091d6c30ab_prof);

        
        $__internal_065dce827fccfefe60a6ac7fb32c82ce8e3e8e4ce6ff78da5ffa78e3b5f6d2b7->leave($__internal_065dce827fccfefe60a6ac7fb32c82ce8e3e8e4ce6ff78da5ffa78e3b5f6d2b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
