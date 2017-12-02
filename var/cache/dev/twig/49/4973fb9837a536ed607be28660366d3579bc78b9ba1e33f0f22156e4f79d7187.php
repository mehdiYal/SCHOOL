<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c0f7e2f2ffb601e212cfd6e34b737b42228d9ae89da73a9689968977527e05c extends Twig_Template
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
        $__internal_e8a4d2797f8189272bea1e1fb8e555a733270d6c2a6b4adbdd99b08ec461b0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a4d2797f8189272bea1e1fb8e555a733270d6c2a6b4adbdd99b08ec461b0a5->enter($__internal_e8a4d2797f8189272bea1e1fb8e555a733270d6c2a6b4adbdd99b08ec461b0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8f1285b8eed8b50b40a82c8c65cbf8701e753a7cf38c6bbb987f3bdffec3f8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1285b8eed8b50b40a82c8c65cbf8701e753a7cf38c6bbb987f3bdffec3f8ac->enter($__internal_8f1285b8eed8b50b40a82c8c65cbf8701e753a7cf38c6bbb987f3bdffec3f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e8a4d2797f8189272bea1e1fb8e555a733270d6c2a6b4adbdd99b08ec461b0a5->leave($__internal_e8a4d2797f8189272bea1e1fb8e555a733270d6c2a6b4adbdd99b08ec461b0a5_prof);

        
        $__internal_8f1285b8eed8b50b40a82c8c65cbf8701e753a7cf38c6bbb987f3bdffec3f8ac->leave($__internal_8f1285b8eed8b50b40a82c8c65cbf8701e753a7cf38c6bbb987f3bdffec3f8ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
