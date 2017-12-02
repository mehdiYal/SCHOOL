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
        $__internal_6b4f39d4418ee9192f8ed6f635c4f4a6570d0e501bc8f2941d28e68198b72726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4f39d4418ee9192f8ed6f635c4f4a6570d0e501bc8f2941d28e68198b72726->enter($__internal_6b4f39d4418ee9192f8ed6f635c4f4a6570d0e501bc8f2941d28e68198b72726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_95e8eb5c7e18fd77291bdbaa88a7bb5010092a14c34a3d036a31f0dd19e6a8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e8eb5c7e18fd77291bdbaa88a7bb5010092a14c34a3d036a31f0dd19e6a8ab->enter($__internal_95e8eb5c7e18fd77291bdbaa88a7bb5010092a14c34a3d036a31f0dd19e6a8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6b4f39d4418ee9192f8ed6f635c4f4a6570d0e501bc8f2941d28e68198b72726->leave($__internal_6b4f39d4418ee9192f8ed6f635c4f4a6570d0e501bc8f2941d28e68198b72726_prof);

        
        $__internal_95e8eb5c7e18fd77291bdbaa88a7bb5010092a14c34a3d036a31f0dd19e6a8ab->leave($__internal_95e8eb5c7e18fd77291bdbaa88a7bb5010092a14c34a3d036a31f0dd19e6a8ab_prof);

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
