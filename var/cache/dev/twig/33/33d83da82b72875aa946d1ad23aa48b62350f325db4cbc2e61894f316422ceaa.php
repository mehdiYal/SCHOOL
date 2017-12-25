<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0e5449bc332f7b8239c2b5e329dd8a96f823be6bf406649db9be429086f4bd20 extends Twig_Template
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
        $__internal_49c92707710f3a211f86518cecc6ea79bb29a0ff559b8447eebb0a43829ae410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c92707710f3a211f86518cecc6ea79bb29a0ff559b8447eebb0a43829ae410->enter($__internal_49c92707710f3a211f86518cecc6ea79bb29a0ff559b8447eebb0a43829ae410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bd49d5019caa2c8f45b1eeaa6f6f331ddf3ab4ca1839885d1e7124044563b114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd49d5019caa2c8f45b1eeaa6f6f331ddf3ab4ca1839885d1e7124044563b114->enter($__internal_bd49d5019caa2c8f45b1eeaa6f6f331ddf3ab4ca1839885d1e7124044563b114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_49c92707710f3a211f86518cecc6ea79bb29a0ff559b8447eebb0a43829ae410->leave($__internal_49c92707710f3a211f86518cecc6ea79bb29a0ff559b8447eebb0a43829ae410_prof);

        
        $__internal_bd49d5019caa2c8f45b1eeaa6f6f331ddf3ab4ca1839885d1e7124044563b114->leave($__internal_bd49d5019caa2c8f45b1eeaa6f6f331ddf3ab4ca1839885d1e7124044563b114_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
