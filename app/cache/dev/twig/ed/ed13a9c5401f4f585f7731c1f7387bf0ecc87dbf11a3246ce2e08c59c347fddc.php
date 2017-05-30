<?php

/* AddressBookBundle:Person:showOne.html.twig */
class __TwigTemplate_ee9d43133615bc3a803d03e5f9b040d6ba7f397e994445f2766fc4a5191858e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:showOne.html.twig", 1);
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
        $__internal_b80439bad4dc9012640663dad5e4237a978fbe4b34116deb57a5e3a1860cc5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80439bad4dc9012640663dad5e4237a978fbe4b34116deb57a5e3a1860cc5ff->enter($__internal_b80439bad4dc9012640663dad5e4237a978fbe4b34116deb57a5e3a1860cc5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:showOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b80439bad4dc9012640663dad5e4237a978fbe4b34116deb57a5e3a1860cc5ff->leave($__internal_b80439bad4dc9012640663dad5e4237a978fbe4b34116deb57a5e3a1860cc5ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bcf62bcdc3c2b3c5d7e5232802e75b8f816c727670b1d9c29a2131caaecda34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcf62bcdc3c2b3c5d7e5232802e75b8f816c727670b1d9c29a2131caaecda34->enter($__internal_9bcf62bcdc3c2b3c5d7e5232802e75b8f816c727670b1d9c29a2131caaecda34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Show one person";
        echo " ";
        
        $__internal_9bcf62bcdc3c2b3c5d7e5232802e75b8f816c727670b1d9c29a2131caaecda34->leave($__internal_9bcf62bcdc3c2b3c5d7e5232802e75b8f816c727670b1d9c29a2131caaecda34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f4d706e614ed2170523025893f4dc44829c3c712eb54fee092a5186623fbd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4d706e614ed2170523025893f4dc44829c3c712eb54fee092a5186623fbd98->enter($__internal_0f4d706e614ed2170523025893f4dc44829c3c712eb54fee092a5186623fbd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Details of ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
     <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        <p>
            <b>GENERAL</b>
        </p>
        <p>
            Name: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo "<br>
        </p>
        <p>
            Surname: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "<br>
        </p>
        <p>
            Description: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo "<br>
        </p>

        ";
        // line 21
        if ( !twig_test_empty($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "address", array()))) {
            // line 22
            echo "            <p>
                <b>ADDRESS</b>
            </p>
            <p>
                City: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "address", array()), "city", array()), "html", null, true);
            echo "<br>
            </p>
            <p>
                Street: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "address", array()), "street", array()), "html", null, true);
            echo "<br>
            </p>
            <p>
                House Number: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "address", array()), "houseNumber", array()), "html", null, true);
            echo "<br>
            </p>
            <p>
                Flat Number: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "address", array()), "flatNumber", array()), "html", null, true);
            echo "<br>
            </p>
        ";
        }
        // line 38
        echo "
        ";
        // line 39
        if ( !twig_test_empty($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "phone", array()))) {
            // line 40
            echo "            <p>
                <b>PHONE</b>
            </p>
            <p>
                Phone Number: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "phone", array()), "number", array()), "html", null, true);
            echo "<br>
            </p>
            <p>
                Phone Type: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "phone", array()), "type", array()), "html", null, true);
            echo "<br>
            </p>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        if ( !twig_test_empty($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "email", array()))) {
            // line 52
            echo "            <p>
                <b>EMAIL</b>
            </p>
            <p>
                Email Address: ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "email", array()), "emailAddress", array()), "html", null, true);
            echo "<br>
            </p>
            <p>
                Email Type: ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "email", array()), "emailType", array()), "html", null, true);
            echo "<br>
            </p>
        ";
        }
        // line 62
        echo "
    </div>
    <p>
        <a href=\"/";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-large\">Modify</a>
        <a href=\"/\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </p>

";
        
        $__internal_0f4d706e614ed2170523025893f4dc44829c3c712eb54fee092a5186623fbd98->leave($__internal_0f4d706e614ed2170523025893f4dc44829c3c712eb54fee092a5186623fbd98_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:showOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  163 => 62,  157 => 59,  151 => 56,  145 => 52,  143 => 51,  140 => 50,  134 => 47,  128 => 44,  122 => 40,  120 => 39,  117 => 38,  111 => 35,  105 => 32,  99 => 29,  93 => 26,  87 => 22,  85 => 21,  79 => 18,  73 => 15,  67 => 12,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %} {{ 'Show one person' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Details of {{ person.name }} {{ person.surname }}</h3>
     <div class=\"w3-container w3-lime\" style=\"font-size: x-large\">
        <p>
            <b>GENERAL</b>
        </p>
        <p>
            Name: {{ person.name }}<br>
        </p>
        <p>
            Surname: {{ person.surname }}<br>
        </p>
        <p>
            Description: {{ person.description }}<br>
        </p>

        {% if person.address is not empty %}
            <p>
                <b>ADDRESS</b>
            </p>
            <p>
                City: {{ person.address.city }}<br>
            </p>
            <p>
                Street: {{ person.address.street }}<br>
            </p>
            <p>
                House Number: {{ person.address.houseNumber }}<br>
            </p>
            <p>
                Flat Number: {{ person.address.flatNumber }}<br>
            </p>
        {% endif %}

        {% if person.phone is not empty %}
            <p>
                <b>PHONE</b>
            </p>
            <p>
                Phone Number: {{ person.phone.number }}<br>
            </p>
            <p>
                Phone Type: {{ person.phone.type }}<br>
            </p>
        {% endif %}

        {% if person.email is not empty %}
            <p>
                <b>EMAIL</b>
            </p>
            <p>
                Email Address: {{ person.email.emailAddress }}<br>
            </p>
            <p>
                Email Type: {{ person.email.emailType }}<br>
            </p>
        {% endif %}

    </div>
    <p>
        <a href=\"/{{ person.id }}/modify\" class=\"w3-button w3-black w3-hover-green w3-padding-large\">Modify</a>
        <a href=\"/\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </p>

{% endblock %}", "AddressBookBundle:Person:showOne.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/showOne.html.twig");
    }
}
