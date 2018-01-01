<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_aa2bfed890f5ae0177ced5b215f15495a59d2f2addfdda437585c4c6044441fb extends Twig_Template
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
        $__internal_fc9a74b497562986e68dbeed9c476a5b8c8354869f63bf998365560f1d3b2c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9a74b497562986e68dbeed9c476a5b8c8354869f63bf998365560f1d3b2c27->enter($__internal_fc9a74b497562986e68dbeed9c476a5b8c8354869f63bf998365560f1d3b2c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_93a051da1684c750e4073304bb650a5e130b49afe41d7b363e4e7f7598be7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a051da1684c750e4073304bb650a5e130b49afe41d7b363e4e7f7598be7923->enter($__internal_93a051da1684c750e4073304bb650a5e130b49afe41d7b363e4e7f7598be7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fc9a74b497562986e68dbeed9c476a5b8c8354869f63bf998365560f1d3b2c27->leave($__internal_fc9a74b497562986e68dbeed9c476a5b8c8354869f63bf998365560f1d3b2c27_prof);

        
        $__internal_93a051da1684c750e4073304bb650a5e130b49afe41d7b363e4e7f7598be7923->leave($__internal_93a051da1684c750e4073304bb650a5e130b49afe41d7b363e4e7f7598be7923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
