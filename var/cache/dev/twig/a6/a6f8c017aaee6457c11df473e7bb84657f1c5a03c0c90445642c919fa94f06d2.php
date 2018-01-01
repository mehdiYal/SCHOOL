<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3f12f90784e2223daa8734ef2ef8b58a74bbcff60751568083ecac6068e00977 extends Twig_Template
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
        $__internal_5cf0a488355c0fed9475699e14bdcfe3b6f5bce5ab4cab5efac15d7c089f89ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf0a488355c0fed9475699e14bdcfe3b6f5bce5ab4cab5efac15d7c089f89ad->enter($__internal_5cf0a488355c0fed9475699e14bdcfe3b6f5bce5ab4cab5efac15d7c089f89ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f2edbd6ff646a0276153643dd34df6366638355c607115eb03460b0aa952a259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2edbd6ff646a0276153643dd34df6366638355c607115eb03460b0aa952a259->enter($__internal_f2edbd6ff646a0276153643dd34df6366638355c607115eb03460b0aa952a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5cf0a488355c0fed9475699e14bdcfe3b6f5bce5ab4cab5efac15d7c089f89ad->leave($__internal_5cf0a488355c0fed9475699e14bdcfe3b6f5bce5ab4cab5efac15d7c089f89ad_prof);

        
        $__internal_f2edbd6ff646a0276153643dd34df6366638355c607115eb03460b0aa952a259->leave($__internal_f2edbd6ff646a0276153643dd34df6366638355c607115eb03460b0aa952a259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
