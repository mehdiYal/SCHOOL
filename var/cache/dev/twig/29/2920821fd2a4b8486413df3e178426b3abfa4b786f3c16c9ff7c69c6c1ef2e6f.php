<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b60bd4f3d6d89ef115fadd63c7b980b12e4227c1f1e5df49f1ebb66f55ab7a72 extends Twig_Template
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
        $__internal_dbb732f564e36334f6524cbab9666b3eff09d2942def77f5e5f035e7ec62a95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb732f564e36334f6524cbab9666b3eff09d2942def77f5e5f035e7ec62a95d->enter($__internal_dbb732f564e36334f6524cbab9666b3eff09d2942def77f5e5f035e7ec62a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_916ee88f9b09175c1c92d65f76133e2be5ec7c4e164e6b01de9db86ba8f53f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916ee88f9b09175c1c92d65f76133e2be5ec7c4e164e6b01de9db86ba8f53f9d->enter($__internal_916ee88f9b09175c1c92d65f76133e2be5ec7c4e164e6b01de9db86ba8f53f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dbb732f564e36334f6524cbab9666b3eff09d2942def77f5e5f035e7ec62a95d->leave($__internal_dbb732f564e36334f6524cbab9666b3eff09d2942def77f5e5f035e7ec62a95d_prof);

        
        $__internal_916ee88f9b09175c1c92d65f76133e2be5ec7c4e164e6b01de9db86ba8f53f9d->leave($__internal_916ee88f9b09175c1c92d65f76133e2be5ec7c4e164e6b01de9db86ba8f53f9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
