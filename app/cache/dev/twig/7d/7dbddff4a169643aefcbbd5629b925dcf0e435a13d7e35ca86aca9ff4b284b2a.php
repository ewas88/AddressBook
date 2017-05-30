<?php

/* AddressBookBundle:Person:modify.html.twig */
class __TwigTemplate_1ba2ef4424c14b77294c6dcb66b61752d9d729d08ea7485cb1829a8252b49b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:modify.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f4c28318b0b56825db8bd443dced47c9ed6d1f3d6cbb5c99494edfd0269d593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4c28318b0b56825db8bd443dced47c9ed6d1f3d6cbb5c99494edfd0269d593->enter($__internal_7f4c28318b0b56825db8bd443dced47c9ed6d1f3d6cbb5c99494edfd0269d593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4c28318b0b56825db8bd443dced47c9ed6d1f3d6cbb5c99494edfd0269d593->leave($__internal_7f4c28318b0b56825db8bd443dced47c9ed6d1f3d6cbb5c99494edfd0269d593_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_917850bd3b7c1a3d1eabf4df2fb2973b49438b14f4da4ae10971a2c737157be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917850bd3b7c1a3d1eabf4df2fb2973b49438b14f4da4ae10971a2c737157be5->enter($__internal_917850bd3b7c1a3d1eabf4df2fb2973b49438b14f4da4ae10971a2c737157be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Modify a person";
        echo " ";
        
        $__internal_917850bd3b7c1a3d1eabf4df2fb2973b49438b14f4da4ae10971a2c737157be5->leave($__internal_917850bd3b7c1a3d1eabf4df2fb2973b49438b14f4da4ae10971a2c737157be5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_762001dd40bfb5ab7191ee2eb8bc46d6307c2c2f2a7dc784bd5220e6502da75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762001dd40bfb5ab7191ee2eb8bc46d6307c2c2f2a7dc784bd5220e6502da75a->enter($__internal_762001dd40bfb5ab7191ee2eb8bc46d6307c2c2f2a7dc784bd5220e6502da75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"w3-display-topleft w3-container ex2\">
        <h3 class=\"w3-container w3-grey\">Modify details for ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
        <h4 class=\"w3-container w3-grey\">Input all information</h4>

            <form action=\"#\" method=\"POST\">
                <p>
                    <b>Name:</b> <input type=\"text\" name=\"name\" required><br>
                </p>
                <p>
                    <b>Surname:</b> <input type=\"text\" name=\"surname\" required><br>
                </p>
                <p>
                    <b>Description:</b> <input type=\"text\" name=\"description\" required><br>
                </p>
                <p>
                    <input class=\"w3-button w3-grey\" type=\"submit\" name=\"send\" value=\"Modify\">
                </p>
            </form>

        <form action=\"/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addAddress\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify address</button>
            </p>
        </form>
        <form action=\"/";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addEmail\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify email</button>
            </p>
        </form>
        <form action=\"/";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/addPhone\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify phone</button>
            </p>
        </form>
        <a href=\"/";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>
";
        
        $__internal_762001dd40bfb5ab7191ee2eb8bc46d6307c2c2f2a7dc784bd5220e6502da75a->leave($__internal_762001dd40bfb5ab7191ee2eb8bc46d6307c2c2f2a7dc784bd5220e6502da75a_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  97 => 35,  89 => 30,  81 => 25,  58 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'Modify a person' }} {% endblock %}

{% block body %}
    <div class=\"w3-display-topleft w3-container ex2\">
        <h3 class=\"w3-container w3-grey\">Modify details for {{ person.name}} {{  person.surname}}</h3>
        <h4 class=\"w3-container w3-grey\">Input all information</h4>

            <form action=\"#\" method=\"POST\">
                <p>
                    <b>Name:</b> <input type=\"text\" name=\"name\" required><br>
                </p>
                <p>
                    <b>Surname:</b> <input type=\"text\" name=\"surname\" required><br>
                </p>
                <p>
                    <b>Description:</b> <input type=\"text\" name=\"description\" required><br>
                </p>
                <p>
                    <input class=\"w3-button w3-grey\" type=\"submit\" name=\"send\" value=\"Modify\">
                </p>
            </form>

        <form action=\"/{{ person.id }}/addAddress\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify address</button>
            </p>
        </form>
        <form action=\"/{{ person.id }}/addEmail\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify email</button>
            </p>
        </form>
        <form action=\"/{{ person.id }}/addPhone\" method=\"GET\">
            <p>
            <button class=\"w3-button w3-black\">Add/Modify phone</button>
            </p>
        </form>
        <a href=\"/{{ person.id }}\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>
{% endblock %}", "AddressBookBundle:Person:modify.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/modify.html.twig");
    }
}
