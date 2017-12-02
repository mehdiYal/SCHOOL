<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_4c59e8c87fb709b79ba2bf8df6f1fd803a3a7b7f24552f0d1ebc43aa1a704138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c59e8c87fb709b79ba2bf8df6f1fd803a3a7b7f24552f0d1ebc43aa1a704138->enter($__internal_4c59e8c87fb709b79ba2bf8df6f1fd803a3a7b7f24552f0d1ebc43aa1a704138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1a372ed9c09ebe7afe07ef54a32cfc5c6aa7eb292b639a33df233fee9c706dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a372ed9c09ebe7afe07ef54a32cfc5c6aa7eb292b639a33df233fee9c706dd1->enter($__internal_1a372ed9c09ebe7afe07ef54a32cfc5c6aa7eb292b639a33df233fee9c706dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4c59e8c87fb709b79ba2bf8df6f1fd803a3a7b7f24552f0d1ebc43aa1a704138->leave($__internal_4c59e8c87fb709b79ba2bf8df6f1fd803a3a7b7f24552f0d1ebc43aa1a704138_prof);

        
        $__internal_1a372ed9c09ebe7afe07ef54a32cfc5c6aa7eb292b639a33df233fee9c706dd1->leave($__internal_1a372ed9c09ebe7afe07ef54a32cfc5c6aa7eb292b639a33df233fee9c706dd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
