<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_1ac76ff15cd2637ed21570a9a84aaf249d6407a8efe5bfdee3ccef42ebc4f93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac76ff15cd2637ed21570a9a84aaf249d6407a8efe5bfdee3ccef42ebc4f93c->enter($__internal_1ac76ff15cd2637ed21570a9a84aaf249d6407a8efe5bfdee3ccef42ebc4f93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_158cc34f1e8d4b3ffc32b5973684e50d30a4f211da18c4825271e51f9f8bea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158cc34f1e8d4b3ffc32b5973684e50d30a4f211da18c4825271e51f9f8bea6e->enter($__internal_158cc34f1e8d4b3ffc32b5973684e50d30a4f211da18c4825271e51f9f8bea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1ac76ff15cd2637ed21570a9a84aaf249d6407a8efe5bfdee3ccef42ebc4f93c->leave($__internal_1ac76ff15cd2637ed21570a9a84aaf249d6407a8efe5bfdee3ccef42ebc4f93c_prof);

        
        $__internal_158cc34f1e8d4b3ffc32b5973684e50d30a4f211da18c4825271e51f9f8bea6e->leave($__internal_158cc34f1e8d4b3ffc32b5973684e50d30a4f211da18c4825271e51f9f8bea6e_prof);

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
