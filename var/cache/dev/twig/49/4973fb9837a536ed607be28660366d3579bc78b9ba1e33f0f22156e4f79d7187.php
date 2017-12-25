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
        $__internal_f67008d48b2e5e6d36cc113b552ba9ebeaa0b33f9c20de04191c5633effd6c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67008d48b2e5e6d36cc113b552ba9ebeaa0b33f9c20de04191c5633effd6c09->enter($__internal_f67008d48b2e5e6d36cc113b552ba9ebeaa0b33f9c20de04191c5633effd6c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c611dbbc812731a6a748d193294978d2e069413be66324dce017b5ca1d37fc38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c611dbbc812731a6a748d193294978d2e069413be66324dce017b5ca1d37fc38->enter($__internal_c611dbbc812731a6a748d193294978d2e069413be66324dce017b5ca1d37fc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f67008d48b2e5e6d36cc113b552ba9ebeaa0b33f9c20de04191c5633effd6c09->leave($__internal_f67008d48b2e5e6d36cc113b552ba9ebeaa0b33f9c20de04191c5633effd6c09_prof);

        
        $__internal_c611dbbc812731a6a748d193294978d2e069413be66324dce017b5ca1d37fc38->leave($__internal_c611dbbc812731a6a748d193294978d2e069413be66324dce017b5ca1d37fc38_prof);

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
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
