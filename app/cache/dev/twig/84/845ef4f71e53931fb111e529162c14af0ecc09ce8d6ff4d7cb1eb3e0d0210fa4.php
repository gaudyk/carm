<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4c1ad5084d16a3774f70894c0ad19005a4b4c7fa387135174a3b37e1de03c3a9 extends Twig_Template
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
        $__internal_aab232f83a559efa3bc9bd852d42bb9f6dac401547c0e886462ef1b19321c530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab232f83a559efa3bc9bd852d42bb9f6dac401547c0e886462ef1b19321c530->enter($__internal_aab232f83a559efa3bc9bd852d42bb9f6dac401547c0e886462ef1b19321c530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_aab232f83a559efa3bc9bd852d42bb9f6dac401547c0e886462ef1b19321c530->leave($__internal_aab232f83a559efa3bc9bd852d42bb9f6dac401547c0e886462ef1b19321c530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/gaudyk/PhpstormProjects/carmex/carm/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
