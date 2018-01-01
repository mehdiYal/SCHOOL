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
        $__internal_0858741571f4f1bb2ff536c792ad4f3a199e081031607aa8e1784f02eee6e0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0858741571f4f1bb2ff536c792ad4f3a199e081031607aa8e1784f02eee6e0da->enter($__internal_0858741571f4f1bb2ff536c792ad4f3a199e081031607aa8e1784f02eee6e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e82aa52d2d5cf2a4cca4ba61abd8133d465144957a482c94c54b19c2430108c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82aa52d2d5cf2a4cca4ba61abd8133d465144957a482c94c54b19c2430108c8->enter($__internal_e82aa52d2d5cf2a4cca4ba61abd8133d465144957a482c94c54b19c2430108c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0858741571f4f1bb2ff536c792ad4f3a199e081031607aa8e1784f02eee6e0da->leave($__internal_0858741571f4f1bb2ff536c792ad4f3a199e081031607aa8e1784f02eee6e0da_prof);

        
        $__internal_e82aa52d2d5cf2a4cca4ba61abd8133d465144957a482c94c54b19c2430108c8->leave($__internal_e82aa52d2d5cf2a4cca4ba61abd8133d465144957a482c94c54b19c2430108c8_prof);

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
