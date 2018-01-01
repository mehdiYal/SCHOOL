<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a268aa55441d3c2842bc5a0f3cba9934cda87574ebec0880db9d06c377f3af20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a42591ef92b782cb8539a998ce779d3080e6df45dd50f918d07e0fdab0f1c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a42591ef92b782cb8539a998ce779d3080e6df45dd50f918d07e0fdab0f1c6b->enter($__internal_4a42591ef92b782cb8539a998ce779d3080e6df45dd50f918d07e0fdab0f1c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8f856d844a38e6a54c106c5bff0b05dd6c991002bed02949028b5140658a4bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f856d844a38e6a54c106c5bff0b05dd6c991002bed02949028b5140658a4bff->enter($__internal_8f856d844a38e6a54c106c5bff0b05dd6c991002bed02949028b5140658a4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4a42591ef92b782cb8539a998ce779d3080e6df45dd50f918d07e0fdab0f1c6b->leave($__internal_4a42591ef92b782cb8539a998ce779d3080e6df45dd50f918d07e0fdab0f1c6b_prof);

        
        $__internal_8f856d844a38e6a54c106c5bff0b05dd6c991002bed02949028b5140658a4bff->leave($__internal_8f856d844a38e6a54c106c5bff0b05dd6c991002bed02949028b5140658a4bff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
