<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_f921d28a335c7f00d1f6a6d497c6995868b742df06027c43ce5c1637fdbd4421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f921d28a335c7f00d1f6a6d497c6995868b742df06027c43ce5c1637fdbd4421->enter($__internal_f921d28a335c7f00d1f6a6d497c6995868b742df06027c43ce5c1637fdbd4421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a4b142b6863c2f3d61adc72ce0c17147914cbf79bd4450af7b240f8bdd4560e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b142b6863c2f3d61adc72ce0c17147914cbf79bd4450af7b240f8bdd4560e1->enter($__internal_a4b142b6863c2f3d61adc72ce0c17147914cbf79bd4450af7b240f8bdd4560e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f921d28a335c7f00d1f6a6d497c6995868b742df06027c43ce5c1637fdbd4421->leave($__internal_f921d28a335c7f00d1f6a6d497c6995868b742df06027c43ce5c1637fdbd4421_prof);

        
        $__internal_a4b142b6863c2f3d61adc72ce0c17147914cbf79bd4450af7b240f8bdd4560e1->leave($__internal_a4b142b6863c2f3d61adc72ce0c17147914cbf79bd4450af7b240f8bdd4560e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
